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
 File: addcomments.php
-----------------------------------------------------
 Use: Adding comments to the database
=====================================================
*/

if( !defined('DATALIFEENGINE') OR !$config['allow_comments'] ) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../../' );
	die( "Hacking attempt!" );
}

if( $config['allow_comments_wysiwyg'] ) {
	
	$allowed_tags = array ('div[align|style|class|data-commenttime|data-commentuser|contenteditable]', 'span[style|class|data-userurl|data-username|contenteditable]', 'p[align|style|class]', 'pre[class]', 'code', 'br', 'strong', 'em', 'ul', 'li', 'ol', 'b', 'u', 'i', 's', 'hr' );
	
	if( $user_group[$member_id['user_group']]['allow_url'] ) $allowed_tags[] = 'a[href|target|style|class|title]';
	if( $user_group[$member_id['user_group']]['allow_image'] ) $allowed_tags[] = 'img[style|class|src|alt|width|height]';
	
	$parse = new ParseFilter( $allowed_tags );
	$parse->wysiwyg = true;
	
} else {
	
	$parse = new ParseFilter();
	
}

$parse->safe_mode = true;
$parse->remove_html = false;
$parse->allow_url = $user_group[$member_id['user_group']]['allow_url'];
$parse->allow_image = $user_group[$member_id['user_group']]['allow_image'];
$parse->allow_video = $user_group[$member_id['user_group']]['video_comments'];
$parse->allow_media = $user_group[$member_id['user_group']]['media_comments'];

$_TIME = time();
$_IP = get_ip();
$CN_HALT = false;

$not_allow_symbol = array("\x22", "\x60", "\t", '\n', '\r', "\n", "\r", '\\', ",", "/", "#", ";", ":", "~", "[", "]", "{", "}", ")", "(", "*", "^", "%", "$", "<", ">", "?", "!", '"', "'", " ", "&");

$name = isset($_POST['name']) ? $db->safesql( htmlspecialchars(strip_tags( trim( $_POST['name'] ) ), ENT_QUOTES, 'UTF-8' ) ) : '';
$mail = isset($_POST['mail']) ? $db->safesql(trim( str_replace( $not_allow_symbol, '', strip_tags( stripslashes( $_POST['mail'] ) ) ) ) ) : '';

$post_id = intval( $_POST['post_id'] );
$stop = array ();
$added_comments_id = 0;

if( $is_logged ) {
	$name = $db->safesql($member_id['name']);
	$mail = $db->safesql($member_id['email']);
} else {
	
	if( isset($banned_info['name']) AND is_array($banned_info['name']) AND count( $banned_info['name'] ) ) foreach ( $banned_info['name'] as $banned ) {

		$banned['name'] = str_replace( '\*', '.*', preg_quote( $banned['name'], "#" ) );

		if( $banned['name'] and preg_match( "#^{$banned['name']}$#i", $name ) ) {

			if( $banned['descr'] ) {
				$lang['reg_err_21'] = str_replace( "{descr}", $lang['reg_err_22'], $lang['reg_err_21'] );
				$lang['reg_err_21'] = str_replace( "{descr}", $banned['descr'], $lang['reg_err_21'] );
			} else
				$lang['reg_err_21'] = str_replace( "{descr}", "", $lang['reg_err_21'] );

			$stop[] = $lang['reg_err_21'];
			$CN_HALT = TRUE;
		}
	}
	
	if( isset($banned_info['email']) AND is_array($banned_info['email']) AND count( $banned_info['email'] ) ) foreach ( $banned_info['email'] as $banned ) {

		$banned['email'] = str_replace( '\*', '.*', preg_quote( $banned['email'], "#" ) );

		if( $banned['email'] AND preg_match( "#^{$banned['email']}$#i", $mail ) ) {

			if( $banned['descr'] ) {
				$lang['reg_err_23'] = str_replace( "{descr}", $lang['reg_err_22'], $lang['reg_err_23'] );
				$lang['reg_err_23'] = str_replace( "{descr}", $banned['descr'], $lang['reg_err_23'] );
			} else
				$lang['reg_err_23'] = str_replace( "{descr}", "", $lang['reg_err_23'] );

			$stop[] = $lang['reg_err_23'];
			$CN_HALT = TRUE;
		}
	}
	
}

if( !isset($_REQUEST['user_hash']) OR !$_REQUEST['user_hash'] OR $_REQUEST['user_hash'] != $dle_login_hash ) {

	$stop[] = $lang['sess_error'];
	$CN_HALT = TRUE;
	
}
	
if ( $user_group[$member_id['user_group']]['spamfilter'] ) {

	$row = $db->super_query( "SELECT * FROM " . PREFIX . "_spam_log WHERE ip = '{$_IP}'" );

	if ( !isset($row['id']) OR !isset($row['email']) OR !$row['id'] OR !$row['email'] ) {

		$sfs = new StopSpam($config['spam_api_key'], $user_group[$member_id['user_group']]['spamfilter'] );
		$args = array('ip' => $_IP, 'email' => $mail);

		if ($sfs->is_spammer( $args )) {

			if ( !$row['id'] ) {
				$db->query( "INSERT INTO " . PREFIX . "_spam_log (ip, is_spammer, email, date) VALUES ('{$_IP}','1', '{$mail}', '{$_TIME}')" );
			} else {
				$db->query( "UPDATE " . PREFIX . "_spam_log SET is_spammer='1', email='{$mail}' WHERE id='{$row['id']}'" );
			}

			$stop[] = $lang['reg_err_29']." ";
			$CN_HALT = TRUE;

		} else {

			if ( !isset($row['id']) OR !$row['id'] ) {
				$db->query( "INSERT INTO " . PREFIX . "_spam_log (ip, is_spammer, email, date) VALUES ('{$_IP}','0', '{$mail}', '{$_TIME}')" );
			} else {
				$db->query( "UPDATE " . PREFIX . "_spam_log SET email='{$mail}' WHERE id='{$row['id']}'" );
			}
		}
	
	} else {

		if ($row['is_spammer']) {

			$stop[] = $lang['reg_err_29']." ";
			$CN_HALT = TRUE;
		
		}

	}

}

if ($is_logged AND $config['comments_restricted'] AND (($_TIME - $member_id['reg_date']) < ($config['comments_restricted'] * 86400)) ) {
	$stop[] = str_replace( '{days}', intval($config['comments_restricted']), $lang['news_info_8'] );
	$CN_HALT = TRUE;
}

if( $config['allow_comments_wysiwyg'] ) {
	
	$comments = $parse->BB_Parse( $parse->process( trim($_POST['comments']) ) );
	
} else {
		
	$parse->allowbbcodes = false;
	$comments = $parse->BB_Parse( $parse->process( trim($_POST['comments'] )), false );
}

if( intval($config['comments_minlen']) AND !$parse->found_media_content AND dle_strlen( str_replace(" ", "", strip_tags(trim($comments))) ) < $config['comments_minlen'] ) {

	$stop[] = $lang['news_err_40'];
	$CN_HALT = TRUE;

}

if( $user_group[$member_id['user_group']]['max_comment_day'] ) {

	$this_time = $_TIME - 86400;
	$db->query( "DELETE FROM " . PREFIX . "_sendlog WHERE date < '$this_time' AND flag='3'" );

	if ( !$is_logged ) $check_user = $_IP; else $check_user = $db->safesql($member_id['name']);

	$row = $db->super_query("SELECT COUNT(*) as count FROM " . PREFIX . "_sendlog WHERE user = '{$check_user}' AND flag='3'");
		
	if( $row['count'] >=  $user_group[$member_id['user_group']]['max_comment_day'] ) {
		
		$stop[] = str_replace('{max}', $user_group[$member_id['user_group']]['max_comment_day'], $lang['news_err_45']);
		$CN_HALT = TRUE;
	}

}

if ( $is_logged AND $user_group[$member_id['user_group']]['disable_comments_captcha'] AND $member_id['comm_num'] >= $user_group[$member_id['user_group']]['disable_comments_captcha'] ) {

	$user_group[$member_id['user_group']]['comments_question'] = false;
	$user_group[$member_id['user_group']]['captcha'] = false;

}

if( $user_group[$member_id['user_group']]['captcha'] ) {

	if ($config['allow_recaptcha']) {

		$_REQUEST['sec_code'] = 1;
		$_SESSION['sec_code_session'] = false;

		if ($_POST['g_recaptcha_response']) {
			$reCaptcha = new ReCaptcha($config['recaptcha_private_key']);

			$resp = $reCaptcha->verifyResponse($_IP, $_POST['g_recaptcha_response'] );
			
		        if ($resp != null && $resp->success) {

					$_REQUEST['sec_code'] = 1;
					$_SESSION['sec_code_session'] = 1;

		        }
		}

	}

} else {
	$_SESSION['sec_code_session'] = 1;
	$_REQUEST['sec_code'] = 1;
}

if( $user_group[$member_id['user_group']]['comments_question'] ) {

	if ( intval($_SESSION['question']) ) {
	
		$answer = $db->super_query("SELECT id, answer FROM " . PREFIX . "_question WHERE id='".intval($_SESSION['question'])."'");
	
		$answers = explode( "\n", $answer['answer'] );
	
		$pass_answer = false;

		$question_answer = trim(dle_strtolower($_POST['question_answer']));
	
		if( count($answers) AND $question_answer ) {
			foreach( $answers as $answer ){

				$answer = trim(dle_strtolower($answer));
	
				if( $answer AND $answer == $question_answer ) {
					$pass_answer	= true;
					break;
				}
			}
		}
	
		if( !$pass_answer ) { $stop[] = $lang['reg_err_24']; $CN_HALT = TRUE; }
	
	} else { $stop[] = $lang['reg_err_24']; $CN_HALT = TRUE;}
		
}

if( $is_logged and ($member_id['restricted'] == 2 or $member_id['restricted'] == 3) ) {
	
	$stop[] = $lang['news_info_3'];
	$CN_HALT = TRUE;

}

if( dle_strlen( $name ) > 40 ) {
	$stop[] = $lang['news_err_1'];
	$CN_HALT = TRUE;
}

if( preg_match( "/[\||\'|\<|\>|\[|\]|\"|\!|\?|\$|\@|\#|\/|\\\|\&\~\*\{\+]/", $name ) ) {
	$stop[] = $lang['reg_err_4'];
	$CN_HALT = TRUE;
}

if( dle_strlen( $mail ) > 40 AND !$is_logged ) {
	$stop[] = $lang['news_err_2'];
	$CN_HALT = TRUE;
}

if( !$post_id ) {
	$stop[] = $lang['news_err_id'];
	$CN_HALT = TRUE;
}
if( dle_strlen( $comments ) > $config['comments_maxlen'] ) {
	$stop[] = $lang['news_err_3'];
	$CN_HALT = TRUE;
}

if( dle_strlen($comments) > 65000) {
	$stop[] = $lang['news_err_3'];
	$CN_HALT = TRUE;
}

if( $_REQUEST['sec_code'] != $_SESSION['sec_code_session'] OR !$_SESSION['sec_code_session'] ) {
	$stop[] = $lang['recaptcha_fail'];
	$CN_HALT = TRUE;
}

if( $comments == '' ) {
	$stop[] = $lang['news_err_11'];
	$CN_HALT = TRUE;
}

if( $parse->not_allowed_tags ) {
	$stop[] = $lang['news_err_33'];
	$CN_HALT = TRUE;
}

if( $parse->not_allowed_text ) {
	$stop[] = $lang['news_err_37'];
	$CN_HALT = TRUE;
}

if( $user_group[$member_id['user_group']]['flood_time'] AND !$CN_HALT ) {
	if( flooder( $_IP ) ) {
		$stop[] = $lang['news_err_4'] . " " . $lang['news_err_5'] . " {$user_group[$member_id['user_group']]['flood_time']} " . $lang['news_err_6'];
		$CN_HALT = TRUE;
	}
}

if( $config['tree_comments'] ){
	
	if( isset($_POST['parent']) AND intval($_POST['parent']) > 0 ) $parent = intval( $_POST['parent'] ); else $parent = 0;
	if( isset($_POST['indent']) AND intval($_POST['indent']) > 0 ) $indent = intval( $_POST['indent'] ); else $indent = 0;
	
	if ( $parent ) {
		
		$row = $db->super_query("SELECT id FROM " . PREFIX . "_comments WHERE id = '{$parent}'");
		
		if ( !isset($row['id']) ) { $stop[] = $lang['reply_error_2']; $CN_HALT = TRUE; }
		
	}
	
} else {
	
	$parent = 0;
	$indent = 0;
	
}

$row = $db->super_query( "SELECT id, date, category, allow_comm, approve, access, user_id FROM " . PREFIX . "_post LEFT JOIN " . PREFIX . "_post_extras ON (" . PREFIX . "_post.id=" . PREFIX . "_post_extras.news_id) WHERE id='{$post_id}'" );
$options = news_permission( $row['access'] );
$news_author = $row['user_id'];

if (isset($options[$member_id['user_group']]) AND $options[$member_id['user_group']] == 1) $user_group[$member_id['user_group']]['allow_addc'] = 0;
if (isset($options[$member_id['user_group']]) AND $options[$member_id['user_group']] == 2) $user_group[$member_id['user_group']]['allow_addc'] = 1;

if( !isset($row['id']) OR !$row['id'] OR !$row['allow_comm'] OR !$row['approve'] OR !$user_group[$member_id['user_group']]['allow_addc'] ) {

	$stop[] = $lang['news_err_29'];
	$CN_HALT = TRUE;
	
} else {

	$cat_list = explode(',', $row['category']);
	$allow_comments_in_cat = true;

	foreach ($cat_list as $element) {

		$element = intval(trim($element));

		if ($element and isset($cat_info[$element]['id']) and  $cat_info[$element]['id']) {

			if ($cat_info[$element]['disable_comments']) $allow_comments_in_cat = false;
		}
	}

	if (!$allow_comments_in_cat) {
		$stop[] = $lang['news_err_29'];
		$CN_HALT = TRUE;
	}

}

if ( $config['max_comments_days'] ) {
	$row['date'] = strtotime( $row['date'] );

	if ($row['date'] < ($_TIME - ($config['max_comments_days'] * 3600 * 24)) ) {
		$stop[] = $lang['news_err_29'];
		$CN_HALT = TRUE;
	}
}

if( empty( $name ) and $CN_HALT != TRUE ) {
	$stop[] = $lang['news_err_9'];
	$CN_HALT = TRUE;
}

if( $mail != "" ) {
	if( @count(explode("@", $mail)) != 2 ) {
		$stop[] = $lang['news_err_10'];
		$CN_HALT = TRUE;
	}


}

if( !$is_logged and $CN_HALT != TRUE ) {
	$db->query( "SELECT name from " . USERPREFIX . "_users WHERE name = '" . $name . "'" );
	
	if( $db->num_rows() > 0 ) {
		$name = $lang['c_not_reg']." ".$name;
		
		$db->query( "SELECT name from " . USERPREFIX . "_users WHERE name = '" . $name . "'" );
		
		if( $db->num_rows() > 0 ) {
			$stop[] = $lang['news_err_7'];
			$CN_HALT = TRUE;
		}
	}
	$db->free();

	if (dle_strlen($name) > 40) {
		$stop[] = $lang['news_err_1'];
		$CN_HALT = TRUE;
	}
}

$time = date( "Y-m-d H:i:s", $_TIME );
$where_approve = 1;

$_SESSION['sec_code_session'] = 0;
$_SESSION['question'] = false;

if( $CN_HALT ) {
	
	msgbox( $lang['all_err_1'], implode( "<br />", $stop ) . "<br /><br /><a href=\"javascript:history.go(-1)\">" . $lang['all_prev'] . "</a>" );

} else {
	
	$update_comments = false;

	if ( $config['allow_combine'] ) {
	
		$row = $db->super_query( "SELECT id, post_id, user_id, date, text, ip, is_register, approve, parent FROM " . PREFIX . "_comments WHERE post_id = '{$post_id}' ORDER BY id DESC LIMIT 0,1" );
		
		if( isset($row['id']) AND $row['id'] ) {
			
			if( $row['user_id'] == $member_id['user_id'] AND $row['is_register'] AND $row['parent'] == $parent ) $update_comments = true;
			elseif( $row['ip'] == $_IP AND ! $row['is_register'] AND ! $is_logged AND $row['parent'] == $parent) $update_comments = true;

			$row['date'] = strtotime( $row['date'] );
			
			if( date( "Y-m-d", $row['date'] ) != date( "Y-m-d", $_TIME ) ) $update_comments = false;

			if ( $user_group[$member_id['user_group']]['edit_limit'] AND (($row['date'] + ($user_group[$member_id['user_group']]['edit_limit'] * 60)) < $_TIME ) ) $update_comments = false;
			
			if( ((dle_strlen( $row['text'] ) + dle_strlen( $comments )) > $config['comments_maxlen']) and $update_comments ) {
				$update_comments = false;
				$stop[] = $lang['news_err_3'];
				$CN_HALT = TRUE;
				msgbox( $lang['all_err_1'], implode( "<br>", $stop ) . "<br><br><a href=\"javascript:history.go(-1)\">" . $lang['all_prev'] . "</a>" );
			
			}
		
		}

	}
	
	if( ! $CN_HALT ) {
		
		if( $config['allow_cmod'] and $user_group[$member_id['user_group']]['allow_modc'] ) {
			
			if( $update_comments ) {
				if( $row['approve'] ) $update_comments = false;
			}
			
			$where_approve = 0;
			$stop[] = $lang['news_err_31'];
			$CN_HALT = TRUE;
			msgbox( $lang['all_info'], implode( "<br>", $stop ) . "<br><br><a href=\"javascript:history.go(-1)\">" . $lang['all_prev'] . "</a>" );
		
		}
		
		if( $update_comments ) {
			
			if( !$config['allow_comments_wysiwyg'] ) $c_implode = "<br><br>";
			else $c_implode = "";
			
			$comments = $db->safesql( $row['text'] ) . $c_implode . $db->safesql( $comments );
			$db->query( "UPDATE " . PREFIX . "_comments set date='$time', text='{$comments}', approve='{$where_approve}' WHERE id='{$row['id']}'" );
			$added_comments_id = $row['id'];
			
			if ($user_group[$member_id['user_group']]['allow_up_image']) {
				$db->query("UPDATE " . PREFIX . "_comments_files SET c_id='{$added_comments_id}' WHERE c_id = '0' AND author = '{$member_id['name']}'");
			}

		} else {

			$comments =	$db->safesql( $comments );		

			if( $is_logged ) $db->query( "INSERT INTO " . PREFIX . "_comments (post_id, user_id, date, autor, email, text, ip, is_register, approve, parent) values ('{$post_id}', '{$member_id['user_id']}', '{$time}', '{$name}', '{$mail}', '{$comments}', '{$_IP}', '1', '{$where_approve}', '{$parent}')" );
			else $db->query( "INSERT INTO " . PREFIX . "_comments (post_id, date, autor, email, text, ip, is_register, approve, parent) values ('{$post_id}', '{$time}', '{$name}', '{$mail}', '{$comments}', '{$_IP}', '0', '{$where_approve}', '{$parent}')" );

			$added_comments_id = $db->insert_id();			

			if( $where_approve ) $db->query( "UPDATE " . PREFIX . "_post SET comm_num=comm_num+1 WHERE id='{$post_id}'" );
			
			if( $is_logged ) {
				$db->query( "UPDATE " . USERPREFIX . "_users SET comm_num=comm_num+1 WHERE user_id ='{$member_id['user_id']}'" );
			}

			if (!$is_logged) {
				set_cookie("dle_guest_name", stripslashes($name), 365);

				if( $mail ) {
					set_cookie("dle_guest_mail", stripslashes($mail), 365);
				}
			}


		}
		
		if ( $user_group[$member_id['user_group']]['allow_up_image'] ){
			$db->query( "UPDATE " . PREFIX . "_comments_files SET c_id='{$added_comments_id}' WHERE c_id = '0' AND author = '{$member_id['name']}'" );
		}
		
		if( $user_group[$member_id['user_group']]['flood_time'] ) {
			$db->query( "INSERT INTO " . PREFIX . "_flood (id, ip) values ('{$_TIME}', '{$_IP}')" );
		}

		if( $user_group[$member_id['user_group']]['max_comment_day'] ) {		
			$db->query( "INSERT INTO " . PREFIX . "_sendlog (user, date, flag) values ('{$check_user}', '{$_TIME}', '3')" );
		}

		if ( $config['mail_comments'] OR $config['allow_subscribe'] ) {
	
			$link_to_comments = $config['http_home_url'] . "index.php?do=findcomments&id={$added_comments_id}&postid={$post_id}";
			
			$row = $db->super_query("SELECT title FROM " . PREFIX . "_post WHERE id = '{$post_id}'");

			$title = stripslashes($row['title']);
			
			$row = $db->super_query( "SELECT * FROM " . PREFIX . "_email WHERE name='comments' LIMIT 0,1" );
			$mail = new dle_mail( $config, $row['use_html'] );

			if (strpos($link_to_comments, "//") === 0) $link_to_comments = "http:" . $link_to_comments;
			elseif (strpos($link_to_comments, "/") === 0) $link_to_comments = "http://" . $_SERVER['HTTP_HOST'] . $link_to_comments;

			$row['template'] = stripslashes( $row['template'] );
			$row['template'] = str_replace( "{%username%}", $name, $row['template'] );
			$row['template'] = str_replace( "{%date%}", langdate( "j F Y H:i", $_TIME, true ), $row['template'] );
			$row['template'] = str_replace( "{%link%}", $link_to_comments, $row['template'] );
			$row['template'] = str_replace( "{%title%}", $title, $row['template'] );

			$body = str_replace( '\n', "", $comments );
			$body = str_replace( '\r', "", $body );
			
			$body = stripslashes( stripslashes( $body ) );
			$body = str_replace( "<br />", "\n", $body );
			$body = str_replace( "<br>", "\n", $body );
			$body = strip_tags( $body );
			$body = preg_replace ( "#\[hide(.*?)\](.+?)\[/hide\]#is", "", $body );
			
			if( $row['use_html'] ) {
				$body = str_replace("\n", "<br>", $body );
			}
					
			$row['template'] = str_replace( "{%text%}", $body, $row['template'] );

		}

		if( $config['mail_comments'] ) {
			
			$body = str_replace( "{%ip%}", $_IP, $row['template'] );
			$body = str_replace( "{%username_to%}", $lang['admin'], $body );
			$body = str_replace( "{%unsubscribe%}", "--", $body );			
			$mail->send( $config['admin_mail'], $lang['mail_comments'], $body );
		
		}


		if ( $config['allow_subscribe'] AND $where_approve ) {

			$row['template'] = str_replace( "{%ip%}", "--", $row['template'] );
			
			$found_news_author_subscribe = false;
			$found_reply_author_subscribe = false;
			
			$news_author_subscribe = $db->super_query( "SELECT " . USERPREFIX . "_users.user_id, " . USERPREFIX . "_users.name, " . USERPREFIX . "_users.email, " . USERPREFIX . "_users.news_subscribe FROM " . PREFIX . "_post_extras LEFT JOIN " . USERPREFIX . "_users ON " . PREFIX . "_post_extras.user_id=" . USERPREFIX . "_users.user_id WHERE " . PREFIX . "_post_extras.news_id='{$post_id}'" );
			
			if( $parent ) {
				
				$reply_author_subscribe = $db->super_query( "SELECT " . USERPREFIX . "_users.user_id, " . USERPREFIX . "_users.name, " . USERPREFIX . "_users.email, " . USERPREFIX . "_users.comments_reply_subscribe FROM " . PREFIX . "_comments LEFT JOIN " . USERPREFIX . "_users ON " . PREFIX . "_comments.user_id=" . USERPREFIX . "_users.user_id WHERE " . PREFIX . "_comments.id='{$parent}'" );
				
			} else $reply_author_subscribe = array();

			if (strpos($config['http_home_url'], "//") === 0) $slink = "https:".$config['http_home_url'];
			elseif (strpos($config['http_home_url'], "/") === 0) $slink = "https://".$_SERVER['HTTP_HOST'].$config['http_home_url'];
			else $slink = $config['http_home_url'];
		
			if( !$parent ) {
				
				$db->query( "SELECT user_id, name, email, hash FROM " . PREFIX . "_subscribe WHERE news_id='{$post_id}'" );
				
				while( $rec = $db->get_row() )
				{
					if( $rec['user_id'] == $news_author_subscribe['user_id'] ) {
						$found_news_author_subscribe = true;
					}
						
					if( $parent AND $rec['user_id'] == $reply_author_subscribe['user_id'] ) {
						$found_reply_author_subscribe = true;
					}
					
					if ($rec['user_id'] != $member_id['user_id'] ) {
						
						$body = str_replace( "{%username_to%}", $rec['name'], $row['template'] );
						$body = str_replace( "{%unsubscribe%}", $slink . "index.php?do=unsubscribe&post_id=" . $post_id . "&user_id=" . $rec['user_id'] . "&hash=" . $rec['hash'], $body );
						$mail->send( $rec['email'], $lang['mail_comments'], $body );
	
					}
	
				}
				
			}

			if($news_author_subscribe['news_subscribe'] AND !$found_news_author_subscribe AND $news_author_subscribe['user_id'] != $member_id['user_id']) {
				
				$body = str_replace( "{%username_to%}", $news_author_subscribe['name'], $row['template'] );
				
				if ($config['allow_alt_url']) {
					$body = str_replace( "{%unsubscribe%}", $slink . "user/" . urlencode ( $news_author_subscribe['name'] ) . "/", $body );
				} else {
					$body = str_replace( "{%unsubscribe%}", $slink . "index.php?subaction=userinfo&user=" . urlencode ( $news_author_subscribe['name'] ), $body );
				}
				
				$mail->send( $news_author_subscribe['email'], $lang['mail_comments'], $body );
				
				$last_send = $news_author_subscribe['user_id'];
				
			} else $last_send = false;
			
			if($parent AND $reply_author_subscribe['comments_reply_subscribe'] AND !$found_reply_author_subscribe AND $reply_author_subscribe['user_id'] != $last_send AND $reply_author_subscribe['user_id'] != $member_id['user_id'] ) {
				
				$body = str_replace( "{%username_to%}", $reply_author_subscribe['name'], $row['template'] );
				
				if ($config['allow_alt_url']) {
					$body = str_replace( "{%unsubscribe%}", $slink . "user/" . urlencode ( $reply_author_subscribe['name'] ) . "/", $body );
				} else {
					$body = str_replace( "{%unsubscribe%}", $slink . "index.php?subaction=userinfo&user=" . urlencode ( $reply_author_subscribe['name'] ), $body );
				}
				
				$mail->send( $reply_author_subscribe['email'], $lang['mail_comments'], $body );
			}
			
			$db->free();

		}
		
		if ($config['allow_subscribe'] AND $is_logged AND isset($_POST['allow_subscribe']) AND $_POST['allow_subscribe'] AND $user_group[$member_id['user_group']]['allow_subscribe']) {

			$found_subscribe = $db->super_query( "SELECT COUNT(*) as count FROM " . PREFIX . "_subscribe WHERE news_id='{$post_id}' AND user_id='{$member_id['user_id']}'" );
			
			if( !$found_subscribe['count'] ) {
	
				$s_hash = md5( random_bytes(32) );
	
				$db->query( "INSERT INTO " . PREFIX . "_subscribe (user_id, name, email, news_id, hash) values ('{$member_id['user_id']}', '{$member_id['name']}', '{$member_id['email']}', '{$post_id}', '{$s_hash}')" );
	
			}

		}
			
		if ( $config['allow_alt_url'] AND !$config['seo_type'] ) $cprefix = "full_"; else $cprefix = "full_".$post_id;
		
		if ( $where_approve ) {

			clear_cache(array('news_', 'comm_' . $post_id, $cprefix, 'stats'));

		} else {

			clear_cache( array('stats')) ;

		}
		
		if( !$ajax_adds AND !$CN_HALT ) {
			$_SERVER['REQUEST_URI'] = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8' );
			header( "Location: {$_SERVER['REQUEST_URI']}" );
			die();
		}
	
	} else msgbox( $lang['all_err_1'], implode( "<br />", $stop ) . "<br /><br /><a href=\"javascript:history.go(-1)\">" . $lang['all_prev'] . "</a>" );

}