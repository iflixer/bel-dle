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
 File: poll.php
-----------------------------------------------------
 Use: AJAX for polls in the news
=====================================================
*/

if(!defined('DATALIFEENGINE')) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../../' );
	die( "Hacking attempt!" );
}

if( !isset($_REQUEST['user_hash']) OR !$_REQUEST['user_hash'] OR $_REQUEST['user_hash'] != $dle_login_hash ) {
	die ("error");
}

function votes($all, $ansid) {
	
	$data = array ();
	$alldata = array ();
	
	if( $all ) {
		$all = explode( "|", $all );
		
		foreach ( $all as $vote ) {
			list ( $answerid, $answervalue ) = explode( ":", $vote );
			$data[$answerid] = intval( $answervalue );
		}
	}
	
	foreach ( $ansid as $id ) {
		if( isset($data[$id]) ) $data[$id] ++; else $data[$id] = 1;
	}
	
	foreach ( $data as $key => $value ) {
		$alldata[] = intval( $key ) . ":" . intval( $value );
	}
	
	$alldata = implode( "|", $alldata );
	
	return $alldata;
}


$news_id = isset($_REQUEST['news_id']) ? intval( $_REQUEST['news_id'] ) : 0;
$answers = isset($_REQUEST['answer']) ? explode( " ", trim( $_REQUEST['answer'] ) ) : array();
$_REQUEST['action'] = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

$buffer = "";

if( $is_logged ) $log_id = intval( $member_id['user_id'] );
else $log_id = $_IP;

$poll = $db->super_query( "SELECT * FROM " . PREFIX . "_poll WHERE news_id = '{$news_id}'" );
$log = $db->super_query( "SELECT COUNT(*) as count FROM " . PREFIX . "_poll_log WHERE news_id = '{$news_id}' AND `member` ='{$log_id}'" );

if( $log['count'] AND $_REQUEST['action'] != "list" ) $_REQUEST['action'] = "results";

if($_REQUEST['action'] != "list" AND !$user_group[$member_id['user_group']]['allow_poll']) $_REQUEST['action'] = "results";

if( $_REQUEST['action'] != "list" AND $poll['closed'] ) $_REQUEST['action'] = "results";

$votes = "";

if( $_REQUEST['action'] == "vote" ) {
	
	$votes = votes( $poll['answer'], $answers );
	$db->query( "UPDATE  " . PREFIX . "_poll set answer='$votes', votes=votes+" . count( $answers ) . " WHERE news_id = '{$news_id}'" );
	$db->query( "INSERT INTO " . PREFIX . "_poll_log (`news_id`, `member`) VALUES('{$news_id}', '$log_id')" );
	
	$_REQUEST['action'] = "results";
}

if( $_REQUEST['action'] == "results" ) {
	
	if( $votes == "" ) {
		$votes = $poll['answer'];
		$allcount = $poll['votes'];
	} else {
		$allcount = count( $answers ) + $poll['votes'];
	}
	
	$answer = get_votes( $votes );
	$body = str_replace( "<br />", "<br>", $poll['body'] );
	$body = explode( "<br>", stripslashes( $body ) );
	$pn = 0;
	
	for($i = 0; $i < sizeof( $body ); $i ++) {
		
		$num = isset($answer[$i]) ? $answer[$i] : 0;
		
		++ $pn;
		if( $pn > 5 ) $pn = 1;
		
		if( $allcount != 0 ) $proc = (100 * $num) / $allcount;
		else $proc = 0;

		$intproc =intval($proc);		
		$proc = round( $proc, 2 );

		$buffer .= <<<HTML
{$body[$i]} - {$num} ({$proc}%)<br />
<div class="pollprogress"><span class="poll{$pn}" style="width:{$intproc}%;">{$proc}%</span></div>
HTML;
	
	}
	
	$buffer .= <<<HTML
	<div class="pollallvotes">{$lang['poll_count']} {$allcount}</div>
HTML;

} elseif( $_REQUEST['action'] == "list" ) {
	
	$body = str_replace( "<br />", "<br>", $poll['body'] );
	$body = explode( "<br>", stripslashes( $body ) );
	
	if( ! $poll['multiple'] ) {
		
		for($v = 0; $v < sizeof( $body ); $v ++) {

			$buffer .= <<<HTML
<div class="pollanswer"><label for="vote{$news_id}{$v}" class="form-check-label"><input id="vote{$news_id}{$v}" name="dle_poll_votes" type="radio" class="form-check-input" value="{$v}"><span>{$body[$v]}</span></label></div>
HTML;
		
		}
	} else {
		
		for($v = 0; $v < sizeof( $body ); $v ++) {
			
			$buffer .= <<<HTML
<div class="pollanswer"><label for="vote{$news_id}{$v}" class="form-check-label"><input id="vote{$news_id}{$v}" name="dle_poll_votes[]" type="checkbox" class="form-check-input" value="{$v}"><span>{$body[$v]}</span></label></div>
HTML;
		
		}
	
	}

} else die( "error" );

echo $buffer;

?>