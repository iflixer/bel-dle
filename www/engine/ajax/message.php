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
 File: message.php
-----------------------------------------------------
 Use: notice of removal news
=====================================================
*/

if(!defined('DATALIFEENGINE')) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../../' );
	die( "Hacking attempt!" );
}

if( !$is_logged ) die( "error" );
if( !$user_group[$member_id['user_group']]['allow_all_edit'] ) die( "error" );

if( !isset($_REQUEST['user_hash']) OR !$_REQUEST['user_hash'] OR $_REQUEST['user_hash'] != $dle_login_hash ) {
	
	die ("error");
	
}
	
$parse = new ParseFilter();
$parse->safe_mode = true;
$parse->allow_url = $user_group[$member_id['user_group']]['allow_url'];
$parse->allow_image = $user_group[$member_id['user_group']]['allow_image'];
$parse->allowbbcodes = false;

$id = isset($_POST['id']) ? intval( $_POST['id'] ) : 0;
$text = isset($_POST['text']) ? $_POST['text'] : "";
$_POST['allowdelete'] = isset($_POST['allowdelete']) ? $_POST['allowdelete'] : "";

if( !$id OR !$text) die( "error" );

$row = $db->super_query( "SELECT id, title, autor FROM " . PREFIX . "_post WHERE id='{$id}'" );

if ( !$row['id'] ) die( "error" );

$title = stripslashes($row['title']);
$row['autor'] = $db->safesql($row['autor']);

$row = $db->super_query( "SELECT email, name, user_id FROM " . USERPREFIX . "_users WHERE name = '{$row['autor']}'" );
			
if( ! $row['user_id'] ) die( "User not found" );

if ($_POST['allowdelete'] == "no" ) {

	$lang['message_pm'] = $lang['message_pm_4'];

	$message = <<<HTML
{$row['name']},

{$lang['message_pm_1']} "{$title}" {$lang['message_pm_5']} {$member_id['name']}. 

{$lang['message_pm_6']}

[quote]{$text}[/quote]
HTML;


} else {

$message = <<<HTML
{$row['name']},

{$lang['message_pm_1']} "{$title}" {$lang['message_pm_2']} {$member_id['name']}. 

{$lang['message_pm_3']}

[quote]{$text}[/quote]
HTML;

}

$message = $db->safesql( $parse->BB_Parse( $parse->process( trim( $message ) ), false ) );
$time = time();
$member_id['name'] = $db->safesql($member_id['name']);

$db->query("INSERT INTO " . USERPREFIX . "_conversations (subject, created_at, updated_at, sender_id, recipient_id) values ('{$lang['message_pm']}', '{$_TIME}', '{$_TIME}', '{$member_id['user_id']}', '{$row['user_id']}')");
$conversation_id = $db->insert_id();
$db->query("INSERT INTO " . USERPREFIX . "_conversation_users (user_id, conversation_id) values ('{$row['user_id']}', '{$conversation_id}') ON DUPLICATE KEY UPDATE user_id = VALUES(user_id)");
$db->query("INSERT INTO " . USERPREFIX . "_conversations_messages (conversation_id, sender_id, content, created_at) values ('{$conversation_id}', '{$member_id['user_id']}', '{$message}', '{$_TIME}')");

$db->query("UPDATE " . USERPREFIX . "_users SET pm_all=pm_all+1, pm_unread=pm_unread+1  WHERE user_id='{$row['user_id']}'");

if( $config['mail_pm'] ) {
		
		$mail_template = $db->super_query( "SELECT * FROM " . PREFIX . "_email WHERE name='pm' LIMIT 0,1" );
		$mail = new dle_mail( $config , $mail_template['use_html'] );
			
		$slink = $config['http_home_url'] . "index.php?do=pm&doaction=readpm&pmid=" . $conversation_id;
			
		$mail_template['template'] = stripslashes( $mail_template['template'] );
		$mail_template['template'] = str_replace( "{%username%}", $row['name'], $mail_template['template'] );
		$mail_template['template'] = str_replace( "{%date%}", langdate( "j F Y H:i", $time ), $mail_template['template'] );
		$mail_template['template'] = str_replace( "{%fromusername%}", $member_id['name'], $mail_template['template'] );
		$mail_template['template'] = str_replace( "{%title%}", $lang['message_pm'], $mail_template['template'] );
		$mail_template['template'] = str_replace( "{%url%}", $slink, $mail_template['template'] );
		
		$message = stripslashes( stripslashes( $message) );

		if( !$mail_template['use_html'] ) {
			$message = str_replace( "<br>", "\n", $message );
			$message = str_replace( '&quot;', '"', $message );
			$message = strip_tags( $message );
		}
		
		$mail_template['template'] = str_replace( "{%text%}", $message, $mail_template['template'] );
		
		$mail->send( $row['email'], $lang['mail_pm'], $mail_template['template'] );
		
}

echo "ok";
?>