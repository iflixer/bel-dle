<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 https://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004-2025 SoftNews Media Group
=====================================================
 This code is protected by copyright
=====================================================
 File: ratingcomments.php
-----------------------------------------------------
 Use: AJAX rating for comments
=====================================================
*/

if(!defined('DATALIFEENGINE')) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../../' );
	die( "Hacking attempt!" );
}

if( !isset($_REQUEST['user_hash']) OR !$_REQUEST['user_hash'] OR $_REQUEST['user_hash'] != $dle_login_hash ) {

	echo "{\"error\":true, \"errorinfo\":\"{$lang['sess_error']}\"}";
	die();
	
}

if( ! $user_group[$member_id['user_group']]['allow_comments_rating'] ) {
		echo "{\"error\":true, \"errorinfo\":\"{$lang['rating_error3']}\"}";
		die();
}

if( isset($_REQUEST['go_rate']) AND $_REQUEST['go_rate'] == "minus" ) $_REQUEST['go_rate'] = -1;
if( isset($_REQUEST['go_rate']) AND $_REQUEST['go_rate'] == "plus" ) $_REQUEST['go_rate'] = 1;

$go_rate =  isset($_REQUEST['go_rate']) ? intval( $_REQUEST['go_rate'] ) : 0;
$c_id = isset($_REQUEST['c_id']) ? intval( $_REQUEST['c_id'] ) : 0 ;
$negative_rate = false;

if ( !$config['comments_rating_type'] ) {
	if( $go_rate > 5 or $go_rate < 1 ) $go_rate = false;

	if( $go_rate < 3 ) $negative_rate = true;

}

if ( $config['comments_rating_type'] == "1" ) {
	$go_rate = 1;
}

if ( $config['comments_rating_type'] == "2" OR $config['comments_rating_type'] == "3") {
	if( $go_rate != 1 AND $go_rate != -1 ) $go_rate = false;

	if ( $go_rate == -1 ) $negative_rate = true;
}

if( !$go_rate or !$c_id ) {
	echo "{\"error\":true, \"errorinfo\":\"{$lang['rating_error3']}\"}";
	die();
}

if ($user_group[$member_id['user_group']]['max_c_negative'] AND $negative_rate ) {
	
	$this_time = $_TIME - 86400;
	$db->query( "DELETE FROM " . PREFIX . "_sendlog WHERE date < '{$this_time}' AND flag='4'" );

	if ( !$is_logged ) $check_user = $_IP; else $check_user = $db->safesql($member_id['name']);

	$row = $db->super_query("SELECT COUNT(*) as count FROM " . PREFIX . "_sendlog WHERE user = '{$check_user}' AND flag='4'");

	if ($row['count'] >=  $user_group[$member_id['user_group']]['max_c_negative']) {
		echo "{\"error\":true, \"errorinfo\":\"{$lang['rating_error6']}\"}";
		die();
	}

	$db->query("INSERT INTO " . PREFIX . "_sendlog (user, date, flag) values ('{$check_user}', '{$_TIME}', '4')");		

}

if( $is_logged ) {
	$member_id['name'] = $db->safesql($member_id['name']);
	$where = "`member` = '{$member_id['name']}'";
} else $where = "ip ='{$_IP}'";

$row = $db->super_query( "SELECT c_id, rating FROM " . PREFIX . "_comment_rating_log WHERE c_id ='{$c_id}' AND {$where}" );

if( !isset($row['c_id']) OR !$row['c_id'] ) {

	$allrate = $db->super_query( "SELECT user_id, ip, rating FROM " . PREFIX . "_comments WHERE id ='{$c_id}'" );
	
	if( $is_logged AND $allrate['user_id'] == $member_id['user_id'] ) {
		
		$db->close();
		
		echo "{\"error\":true, \"errorinfo\":\"{$lang['rating_error4']}\"}";
		die();
	
	} elseif( !$is_logged AND $_IP == $allrate['ip'] ) {
		
		$db->close();
		
		echo "{\"error\":true, \"errorinfo\":\"{$lang['rating_error4']}\"}";
		die();
		
	}

	if( $config['comments_rating_type'] == "1" AND $allrate['rating'] < 0 ) {
		
		$db->query( "UPDATE " . PREFIX . "_comments SET rating='{$go_rate}', vote_num='1' WHERE id ='{$c_id}'" );
		
	} elseif ( !$config['comments_rating_type'] AND $allrate['rating'] < 0 ) {
		
		$db->query( "UPDATE " . PREFIX . "_comments SET rating='{$go_rate}', vote_num='1' WHERE id ='{$c_id}'" );
		
	} else {
		
		$db->query( "UPDATE " . PREFIX . "_comments SET rating=rating+'{$go_rate}', vote_num=vote_num+1 WHERE id ='{$c_id}'" );
		
	}
	
	if ( $db->get_affected_rows() )	{
		if( $is_logged ) $user_name = $member_id['name'];
		else $user_name = "";
		
		$db->query( "INSERT INTO " . PREFIX . "_comment_rating_log (`c_id`, `ip`, `member`, `rating`) values ('{$c_id}', '{$_IP}', '{$user_name}', '{$go_rate}')" );

		clear_cache( array( "comm_" ) );

	}
	
} elseif ( $row['rating'] AND $row['rating'] != $go_rate ) {

	$allrate = $db->super_query( "SELECT user_id, rating FROM " . PREFIX . "_comments WHERE id ='{$c_id}'" );

	if( $config['comments_rating_type'] == "1" AND $allrate['rating'] < 0 ) {
		
		$db->query( "UPDATE " . PREFIX . "_comments SET rating='{$go_rate}', vote_num='1' WHERE id ='{$c_id}'" );
		
	} elseif ( !$config['comments_rating_type'] AND $allrate['rating'] < 0 ) {
		
		$db->query( "UPDATE " . PREFIX . "_comments SET rating='{$go_rate}', vote_num='1' WHERE id ='{$c_id}'" );
		
	} else {
		
		$db->query( "UPDATE " . PREFIX . "_comments SET rating=rating-'{$row['rating']}' WHERE id ='{$c_id}'" );
		$db->query( "UPDATE " . PREFIX . "_comments SET rating=rating+'{$go_rate}' WHERE id ='{$c_id}'" );
		
	}
	
	$db->query( "UPDATE " . PREFIX . "_comment_rating_log SET rating='{$go_rate}' WHERE c_id ='{$c_id}' AND {$where}" );
	
} else {
	$db->close();
	
	echo "{\"error\":true, \"errorinfo\":\"{$lang['rating_error5']}\"}";
	die();	
}

$row = $db->super_query( "SELECT id, rating, vote_num FROM " . PREFIX . "_comments WHERE id ='$c_id'" );

if ( $config['comments_rating_type'] ) {
	$dislikes = ($row['vote_num'] - $row['rating'])/2;
	$likes = $row['vote_num'] - $dislikes;	
} else {
	$dislikes = 0;
	$likes = 0;	
}

$buffer = ShowCommentsRating( $row['id'], $row['rating'], $row['vote_num'], true );

$buffer = addcslashes($buffer, "\t\n\r\"\\/");

$buffer = htmlspecialchars("{\"success\":true, \"rating\":\"{$buffer}\", \"votenum\":\"{$row['vote_num']}\", \"likes\":\"{$likes}\", \"dislikes\":\"{$dislikes}\"}", ENT_NOQUOTES, 'UTF-8');

$db->close();

echo $buffer;
?>