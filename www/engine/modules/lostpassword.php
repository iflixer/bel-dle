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
 File: lostpassword.php
-----------------------------------------------------
 Use: Forgotten password recovery
=====================================================
*/

if( !defined('DATALIFEENGINE') ) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../../' );
	die( "Hacking attempt!" );
}

$canonical = $PHP_SELF."?do=lostpassword";

if( $is_logged ) {
	
	msgbox( $lang['all_info'], $lang['user_logged'] );

} elseif( isset($_GET['douser']) AND intval( $_GET['douser'] ) AND isset($_GET['lostid']) AND $_GET['lostid'] ) {
	
	$douser = intval( $_GET['douser'] );
	$lostid = $_GET['lostid'];
	
	$row = $db->super_query( "SELECT lostid FROM " . USERPREFIX . "_lostdb WHERE lostname='{$douser}'" );
	
	if( isset($row['lostid']) AND $row['lostid'] AND $lostid AND $row['lostid'] == $lostid ) {

		$row = $db->super_query( "SELECT email, name FROM " . USERPREFIX . "_users WHERE user_id='$douser' LIMIT 0,1" );
			
		$username = $row['name'];
		$lostmail = $row['email'];
		
		if (isset($_GET['action'] ) AND $_GET['action'] == "ip") {

			$db->query( "UPDATE " . USERPREFIX . "_users SET allowed_ip = '' WHERE user_id='$douser'" );
			$db->query( "DELETE FROM " . USERPREFIX . "_lostdb WHERE lostname='$douser'" );

			$lang['lost_clear_ip_1'] = str_replace("{username}", $username, $lang['lost_clear_ip_1']);
			
			msgbox( $lang['lost_clear_ip'], $lang['lost_clear_ip_1'] );


		} else {

			$salt = str_shuffle("abchefghjkmnpqrstuvwxyz0123456789".sha1(random_bytes(32)));

			$new_pass = "";

			for($i = 0; $i < 11; $i ++) {
				$new_pass .= $salt[random_int(0, 72)];
			}
			
			$new_pass_hash = password_hash($new_pass, PASSWORD_DEFAULT);
			
			if( !$new_pass_hash ) {
				die("PHP extension Crypt must be loaded for password_hash to function");
			}
			
			$db->query( "UPDATE " . USERPREFIX . "_users SET password='" . $db->safesql($new_pass_hash) . "', allowed_ip = '', twofactor_auth = '0' WHERE user_id='{$douser}'" );
			$db->query( "DELETE FROM " . USERPREFIX . "_lostdb WHERE lostname='$douser'" );
			
			$mail = new dle_mail( $config );

			if ($config['auth_metod']) $username = $lostmail;

			if (strpos($config['http_home_url'], "//") === 0) $config['http_home_url'] = "https:".$config['http_home_url'];
			elseif (strpos($config['http_home_url'], "/") === 0) $config['http_home_url'] = "https://".$_SERVER['HTTP_HOST'].$config['http_home_url'];

			$message = $lang['lost_npass']."\n\n{$lang['lost_login']} {$username}\n{$lang['lost_pass']} {$new_pass}\n\n{$lang['lost_info']}\n\n{$lang['lost_mfg']} ".$config['http_home_url'];
			$mail->send( $lostmail, $lang['lost_subj'], $message );
			
			msgbox( $lang['lost_gen'], $lang['lost_send']." <b>{$lostmail}</b>. ".$lang['lost_info'] );
		}	

	} else {

		$db->query( "DELETE FROM " . USERPREFIX . "_lostdb WHERE lostname='$douser'" );
		msgbox( $lang['all_err_1'], $lang['lost_err'] );

	}
	

} elseif( isset( $_POST['submit_lost'] ) ) {

	if ($config['allow_recaptcha']) {

		if ( isset($_POST['g-recaptcha-response']) AND $_POST['g-recaptcha-response'] ) {
			
			$reCaptcha = new ReCaptcha($config['recaptcha_private_key']);
		
			$resp = $reCaptcha->verifyResponse(get_ip(), $_POST['g-recaptcha-response'] );
			
		   if ($resp != null && $resp->success) {

				$_POST['sec_code'] = 1;
				$_SESSION['sec_code_session'] = 1;

		    } else $_SESSION['sec_code_session'] = false;
				
		} else $_SESSION['sec_code_session'] = false;

	}
	
	$_POST['lostname'] = isset($_POST['lostname']) ? $_POST['lostname'] : '';

	if( preg_match( "/[\||\'|\<|\>|\[|\]|\"|\!|\?|\$|\/|\\\|\&\~\*\{\+]/", $_POST['lostname'] ) OR !trim($_POST['lostname'])) {

		msgbox( $lang['all_err_1'], "<ul>".$lang['reg_err_4'] . "</ul><br /><a href=\"javascript:history.go(-1)\">$lang[all_prev]</a>" );
	
	} elseif( !isset($_POST['sec_code']) OR $_POST['sec_code'] != $_SESSION['sec_code_session'] OR !$_SESSION['sec_code_session'] ) {
		
		msgbox( $lang['all_err_1'], "<ul>".$lang['recaptcha_fail'] . "</ul><br /><a href=\"javascript:history.go(-1)\">$lang[all_prev]</a>" );
	
	} else {
		
		$_SESSION['sec_code_session'] = false;
		$lostname = $db->safesql( $_POST['lostname'] );
		
		if( @count(explode("@", $lostname)) == 2 ) $search = "email = '" . $lostname . "'";
		else $search = "name = '" . $lostname . "'";
		
		$row = $db->super_query( "SELECT email, password, name, user_id, user_group FROM " . USERPREFIX . "_users WHERE {$search}" );
		
		if( isset( $row['user_id'] ) AND $row['user_id'] AND !$user_group[$row['user_group']]['allow_admin']) {
			
			$lostmail = $row['email'];
			$userid = $row['user_id'];
			$lostname = $row['name'];
			$lostpass = $row['password'];
			
			$row = $db->super_query( "SELECT * FROM " . PREFIX . "_email where name='lost_mail' LIMIT 0,1" );
			$mail = new dle_mail( $config, $row['use_html'] );
			
			$row['template'] = stripslashes( $row['template'] );
			
			$lostid = sha1( md5( $lostname . $lostmail. $lostpass ) . microtime() . random_bytes(32) );

			if ( strlen($lostid) != 40 ) die ("US Secure Hash Algorithm 1 (SHA1) disabled by Hosting");
			
			if (strpos($config['http_home_url'], "//") === 0) $slink = "https:".$config['http_home_url'];
			elseif (strpos($config['http_home_url'], "/") === 0) $slink = "https://".$_SERVER['HTTP_HOST'].$config['http_home_url'];
			else $slink = $config['http_home_url'];
					
			$lostlink = $slink . "index.php?do=lostpassword&action=password&douser=" . $userid . "&lostid=" . $lostid;
			$iplink = $slink . "index.php?do=lostpassword&action=ip&douser=" . $userid . "&lostid=" . $lostid;

			if( $row['use_html'] ) {
				$link = "{$lang['lost_password']}<br><a href=\"{$lostlink}\" target=\"_blank\">{$lostlink}</a><br><br>{$lang['lost_ip']}<br><a href=\"{$iplink}\" target=\"_blank\">{$iplink}</a>";
			} else {
				$link = $lang['lost_password']."\n".$lostlink."\n\n".$lang['lost_ip']."\n".$iplink;
			}
			
			$db->query( "DELETE FROM " . USERPREFIX . "_lostdb WHERE lostname='{$userid}'" );
			
			$db->query( "INSERT INTO " . USERPREFIX . "_lostdb (lostname, lostid) values ('{$userid}', '{$lostid}')" );
			
			$row['template'] = str_replace( "{%username%}", $lostname, $row['template'] );
			$row['template'] = str_replace( "{%lostlink%}", $link, $row['template'] );
			$row['template'] = str_replace( "{%losturl%}", $lostlink, $row['template'] );
			$row['template'] = str_replace( "{%ipurl%}", $iplink, $row['template'] );
			$row['template'] = str_replace( "{%ip%}", get_ip(), $row['template'] );
			
			$mail->send( $lostmail, $lang['lost_subj'], $row['template'] );
			
			if( $mail->send_error ) msgbox( $lang['all_info'], $mail->smtp_msg );
			else msgbox( $lang['lost_ms'], $lang['lost_ms_1'] );
		
		} elseif( !isset($row['user_id']) ) {

			msgbox( $lang['all_err_1'], $lang['lost_err_1'] );

		} else {

			msgbox( $lang['all_err_1'], $lang['lost_err_2'] );

		}
	}

} else {
	
	$tpl->load_template( 'lostpassword.tpl' );

	if ( $config['allow_recaptcha'] ) {

		$tpl->set( '[recaptcha]', "" );
		$tpl->set( '[/recaptcha]', "" );
		
		$captcha_name = "g-recaptcha";
		$captcha_url = "https://www.google.com/recaptcha/api.js?hl={$lang['language_code']}";
		
		if( $config['allow_recaptcha'] == 3) {
			
			$captcha_name = "h-captcha";
			$captcha_url = "https://js.hcaptcha.com/1/api.js?hl={$lang['language_code']}";
		
		}

		if ($config['allow_recaptcha'] == 4) {

			$captcha_name = "cf-turnstile";
			$captcha_url = "https://challenges.cloudflare.com/turnstile/v0/api.js?compat=recaptcha";
		}

		if( $config['allow_recaptcha'] == 2) {
			
			$tpl->set( '{recaptcha}', "");
			$tpl->copy_template .= "<script src=\"https://www.google.com/recaptcha/api.js?render={$config['recaptcha_public_key']}\" async defer></script>";
						
		} else {
						
			$tpl->set( '{recaptcha}', "<div class=\"{$captcha_name}\" data-sitekey=\"{$config['recaptcha_public_key']}\" data-theme=\"{$config['recaptcha_theme']}\"></div><script src=\"{$captcha_url}\" async defer></script>" );
		}
		
		$tpl->set_block( "'\\[sec_code\\](.*?)\\[/sec_code\\]'si", "" );
		$tpl->set( '{code}', "" );

	} else {

		$tpl->set( '[sec_code]', "" );
		$tpl->set( '[/sec_code]', "" );	
		$tpl->set( '{code}', "<a onclick=\"reload(); return false;\" href=\"#\" title=\"{$lang['reload_code']}\"><span id=\"dle-captcha\"><img src=\"engine/modules/antibot/antibot.php\" alt=\"{$lang['reload_code']}\" border=\"0\" width=\"160\" height=\"80\" /></span></a>" );
		$tpl->set_block( "'\\[recaptcha\\](.*?)\\[/recaptcha\\]'si", "" );
		$tpl->set( '{recaptcha}', "" );

	}
	
	$tpl->copy_template = "<form  method=\"post\" name=\"dle-lostpassword\" id=\"dle-lostpassword\" action=\"?do=lostpassword\">\n" . $tpl->copy_template . "<input name=\"submit_lost\" type=\"hidden\" id=\"submit_lost\" value=\"submit_lost\" /></form>";

		$onload_scripts[] = <<<HTML
		
			$('#dle-lostpassword').submit(function(event) {

				if(dle_captcha_type == 2 && typeof grecaptcha != "undefined" ) {

					event.preventDefault();
					
					grecaptcha.execute('{$config['recaptcha_public_key']}', {action: 'lostpassword'}).then(function(token) {
						$('#dle-lostpassword').append('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
						$('#dle-lostpassword').off('submit');
						HTMLFormElement.prototype.submit.call(document.getElementById('dle-lostpassword'));
					});
			
					return false;
				}
				
				return true;
				
			});
HTML;

	$tpl->compile( 'content' );
	
	$tpl->clear();
}
?>