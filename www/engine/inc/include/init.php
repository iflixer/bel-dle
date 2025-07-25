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
 File: init.php
=====================================================
*/

if( !defined( 'DATALIFEENGINE' ) ) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../../../' );
	die( "Hacking attempt!" );
}

define('DINITVERSION', '2501' );
define('VERSIONID',    '18.0' );
define('BUILDID',      '103' );

header("Content-type: text/html; charset=utf-8");
header ("X-Frame-Options: SAMEORIGIN");
date_default_timezone_set ( $config['date_adjust'] );

require_once (DLEPlugins::Check(ENGINE_DIR . '/inc/include/functions.inc.php'));

dle_session();
check_xss();

$config['charset'] = isset($config['charset']) ? strtolower(trim($config['charset'])) : 'utf-8';

if( $config['only_ssl'] AND !isSSL() AND !isset($_SESSION['is_redirect']) ) {
	$_SESSION['is_redirect'] = true;
	$_SERVER['REQUEST_URI'] = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8' );
	$_SERVER['REQUEST_URI'] = str_replace("&amp;", "&", $_SERVER['REQUEST_URI']);
	
	if ($config['www_redirect'] AND stripos($_SERVER['HTTP_HOST'], 'www.') === 0) {
		$_SERVER['HTTP_HOST'] = substr($_SERVER['HTTP_HOST'], 4);
	}

	header("HTTP/1.0 301 Moved Permanently");
	header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	die("Redirect");

} elseif( isset($_SESSION['is_redirect']) ) { unset($_SESSION['is_redirect']); }


if ($config['www_redirect'] AND stripos($_SERVER['HTTP_HOST'], 'www.') === 0 AND !isset($_SESSION['is_redirect'])) {
	$_SESSION['is_redirect'] = true;

	$_SERVER['REQUEST_URI'] = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');
	$_SERVER['REQUEST_URI'] = str_replace("&amp;", "&", $_SERVER['REQUEST_URI']);

	$_SERVER['HTTP_HOST'] = substr($_SERVER['HTTP_HOST'], 4);

	header("HTTP/1.0 301 Moved Permanently");
	header("Location: //" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
	die("Redirect");
	
} elseif (isset($_SESSION['is_redirect'])) { unset($_SESSION['is_redirect']); }

$lic_tr = false; // always ok
$auto_detect_config = false;
$domen_md5 = md5( get_domen_hash() . DINITVERSION );
if( isset($config['key']) AND $config['key'] AND $domen_md5 == $config['key'] ) $lic_tr = false;

$_SERVER['PHP_SELF'] = htmlspecialchars( $_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8' );

if( !$config['http_home_url'] ) {
	
	$config['http_home_url'] = explode( $config['admin_path'], $_SERVER['PHP_SELF'] );
	$config['http_home_url'] = reset( $config['http_home_url'] );
	$config['http_home_url'] = "https://" . $_SERVER['HTTP_HOST'] . $config['http_home_url'];
	$auto_detect_config = true;

}

$selected_language = $config['langs'];

if (isset( $_POST['selected_language'] )) {

	$_POST['selected_language'] = totranslit( $_POST['selected_language'], false, false );

	if ($_POST['selected_language'] AND @is_dir ( ROOT_DIR . '/language/' . $_POST['selected_language'] )) {
		
		$selected_language = $_POST['selected_language'];
		set_cookie ( "selected_language", $selected_language, 365 );
		

	}

} elseif (isset( $_COOKIE['selected_language'] )) { 

	$_COOKIE['selected_language'] = totranslit( $_COOKIE['selected_language'], false, false );

	if ($_COOKIE['selected_language'] != "" AND @is_dir ( ROOT_DIR . '/language/' . $_COOKIE['selected_language'] )) {
		$selected_language = $_COOKIE['selected_language'];
	}

}
if ( file_exists( DLEPlugins::Check(ROOT_DIR . '/language/' . $selected_language . '/adminpanel.lng') ) ) {
	require_once (DLEPlugins::Check(ROOT_DIR . '/language/' . $selected_language . '/adminpanel.lng'));
} else die("Language file not found");

$is_loged_in = false;
$member_id = array ();
$result = "";
$username = "";
$cmd5_password = "";
$allow_login = false;
$check_log = false;
$attempt_login = false;
$js_array = array ();
$css_array = array ();
$PHP_SELF = $_SERVER['PHP_SELF'];
$_IP = get_ip();
$_TIME = time ();
$dle_login_hash = sha1(SECURE_AUTH_KEY . $_SERVER['HTTP_USER_AGENT']);
$skin_header = "";
$skin_footer = "";
$post = false;

$_REQUEST['action'] = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$_POST['action']    = isset($_POST['action']) ? $_POST['action'] : '';
$_GET['action']     = isset($_GET['action']) ? $_GET['action'] : '';
$_REQUEST['subaction'] = isset($_REQUEST['subaction']) ? $_REQUEST['subaction'] : '';
$_REQUEST['doaction'] = isset($_REQUEST['doaction']) ? $_REQUEST['doaction'] : '';
$_POST['doaction'] = isset($_POST['doaction']) ? $_POST['doaction'] : '';
	
$login_params = array('ip_control' => $config['ip_control'], 'log_hash' => $config['log_hash']);

if( $_POST['action'] ) $action = $_POST['action'];
elseif( $_GET['action'] ) $action = $_GET['action'];
else $action = '';

if( isset( $_POST['mod'] ) AND $_POST['mod'] ) $mod = $_POST['mod'];
elseif( isset( $_GET['mod'] ) AND $_GET['mod'] ) $mod = $_GET['mod'];
else $mod = '';

$mod = totranslit ( $mod, true, false );
$action = totranslit ( $action, false, false );

if ( $config['cache_type'] ) {

	if( $config['cache_type'] == "2" ) {
		
		include_once (DLEPlugins::Check(ENGINE_DIR . '/classes/redis.class.php'));
		
	} else {
		
		include_once (DLEPlugins::Check(ENGINE_DIR . '/classes/memcache.class.php'));
		
	}

	$dlefastcache = new dle_fastcache($config);
	
}

$user_group = get_vars( "usergroup" );

if( !$user_group ) {
	$user_group = array ();
	
	$db->query( "SELECT * FROM " . USERPREFIX . "_usergroups ORDER BY id ASC" );
	
	while ( $row = $db->get_row() ) {
		
		$user_group[$row['id']] = array ();
		
		foreach ( $row as $key => $value ) {
			$user_group[$row['id']][$key] = stripslashes($value);
		}
	
	}
	set_vars( "usergroup", $user_group );
	$db->free();
}

$cat_info = get_vars( "category" );

if( ! is_array( $cat_info ) ) {
	$cat_info = array ();
	
	$db->query( "SELECT * FROM " . PREFIX . "_category ORDER BY posi ASC" );
	
	while ( $row = $db->get_row() ) {
		
		if( !$row['active'] ) continue;
		
		$cat_info[$row['id']] = array ();
		
		foreach ( $row as $key => $value ) {
			$cat_info[$row['id']][$key] = stripslashes( $value );
		}
		
		$cat_info[$row['id']]['newscount'] = 0;
	
	}
	
	set_vars( "category", $cat_info );
	$db->free();
}

if( isset($_REQUEST['action']) AND $_REQUEST['action'] == "logout" ) {

	if (isset($_COOKIE) and is_array($_COOKIE) and count($_COOKIE)) {
		foreach ($_COOKIE as $key => $value) {
			set_cookie($key, '', 0);
		}
	}

	session_unset();
	session_destroy();

	header( "Location: ?mod=main" );
	
	msg( "info", $lang['index_msge'], $lang['index_exit'] );
}

$block_country = false;

if (isset($config['allowed_panel_country']) AND trim($config['allowed_panel_country'])) {
	if (!DLECountry::Check($config['allowed_panel_country'])) $block_country = true;
}

if (isset($config['declined_panel_country']) AND trim($config['declined_panel_country'])) {
	if (DLECountry::Check($config['declined_panel_country'])) $block_country = true;
}

if ($block_country AND $mod != "upgrade" ) {
	msg( "error", $lang['addnews_denied'], $lang['country_declined'] );
}

$allow_login = true;
if ($config['login_log']) $allow_login = check_allow_login ($_IP, $config['login_log']);

if (!$allow_login) {
	$lang['login_err_2'] = str_replace("{time}", $config['login_ban_timeout'], $lang['login_err_2']);
	msg( "info", $lang['index_msge'], $lang['login_err_2'] );
}

if( $allow_login ) {

	if( isset($_SESSION['dle_user_id']) AND intval( $_SESSION['dle_user_id'] ) > 0 AND $_SESSION['dle_password'] ) {
		
		$username = intval($_SESSION['dle_user_id']);
		$cmd5_password = $_SESSION['dle_password'];
		$post = false;
		$attempt_login = true;
		if ( !isset($_SESSION['check_log']) ) $check_log = true;
	
	} elseif( isset($_COOKIE['dle_user_id']) AND intval( $_COOKIE['dle_user_id'] ) > 0 AND $_COOKIE['dle_password']) {
		
		$username = intval($_COOKIE['dle_user_id']);
		$cmd5_password = (string)$_COOKIE['dle_password'];
		$post = false;
		$check_log = true;
		$attempt_login = true;
	}
	
	if( isset($_REQUEST['subaction']) AND $_REQUEST['subaction'] == 'dologin' ) {
		
		$username = $_POST['username'];
		$cmd5_password = (string)$_POST['password'];
		$post = true;
		$check_log = true;
		$attempt_login = true;
		
		if( $config['charset'] != "utf-8" ) {
		
			if( function_exists( 'mb_convert_encoding' ) ) {
			
				$username = mb_convert_encoding( $username, $config['charset'], "utf-8" );
			
			} elseif( function_exists( 'iconv' ) ) {
				
				$username = iconv("utf-8", $config['charset'], $username);
				
			}
			
			if( function_exists( 'mb_convert_encoding' ) ) {
			
				$cmd5_password = mb_convert_encoding( $cmd5_password, $config['charset'], "utf-8" );
			
			} elseif( function_exists( 'iconv' ) ) {
				
				$cmd5_password = iconv("utf-8", $config['charset'], $cmd5_password);
				
			}
			
		}
	
	}

}

if( check_login( $username, $cmd5_password, $post, $check_log ) ) {
	$is_loged_in = true;
		
	if ( $post AND password_needs_rehash($member_id['password'], PASSWORD_DEFAULT) ) {
		
		if ( version_compare($config['version_id'], '11.2', '>=') ) {
			
			if( strlen($cmd5_password) > 72 ) $cmd5_password = substr($md5_password, 0, 72);
			
			$member_id['password'] = password_hash($cmd5_password, PASSWORD_DEFAULT);
				
			$new_pass_hash = "password='".$db->safesql($member_id['password'])."', ";
			
		} else $new_pass_hash = "";
		
	} else $new_pass_hash = "";
	
	if($config['twofactor_auth'] AND $member_id['twofactor_auth']) {
		$config['ip_control'] = 2;
		$config['log_hash'] = 1;
	}

	if( !isset($_SESSION['dle_user_id']) AND isset($_COOKIE['dle_user_id']) AND $_COOKIE['dle_user_id'] ) {
		
		session_regenerate_id();
		
		$_SESSION['dle_user_id'] = $_COOKIE['dle_user_id'];
		$_SESSION['dle_password'] = $_COOKIE['dle_password'];
	}

} else {
	
	if( $_REQUEST['subaction'] == 'dologin' ) {
		
		$result = "<span class=\"text-danger\">" . $lang['index_errpass'] . "</span>";
	
	} else
		$result = "";
	
	$is_loged_in = false;
}

###########################
if( $is_loged_in AND $_REQUEST['subaction'] == 'dologin' ) {
	
	session_regenerate_id();
	
	if(!$config['twofactor_auth'] OR !$member_id['twofactor_auth']) {
		
		$_SESSION['dle_user_id'] = $member_id['user_id'];
		$_SESSION['dle_password'] = md5($member_id['password']);
	
		if ( isset($_POST['login_not_save']) AND intval($_POST['login_not_save']) ) {
	
			set_cookie( "dle_user_id", "", 0 );
			set_cookie( "dle_password", "", 0 );
	
		} else {			
	
			set_cookie( "dle_user_id", $member_id['user_id'], 365 );
			set_cookie( "dle_password", md5($member_id['password']), 365 );
	
		}
	}
	
	$time_now = time();

	if ($config['login_log']) $db->query( "DELETE FROM " . PREFIX . "_login_log WHERE ip = '{$_IP}'" );
		
	$hash = md5( random_bytes(32)  );
	$member_id['hash'] = $hash;
	
	if( $config['log_hash'] ) {
		set_cookie( "dle_hash", $hash, 365 );
		$_COOKIE['dle_hash'] = $hash;
	}
	
	$db->query( "UPDATE " . USERPREFIX . "_users SET {$new_pass_hash}lastdate='{$time_now}', hash='{$hash}',  logged_ip='{$_IP}' WHERE user_id='{$member_id['user_id']}'" );

	if($config['twofactor_auth'] AND $member_id['twofactor_auth']) {

		$is_loged_in = false;
		$attempt_login = false;
				
		$_SESSION['twofactor_auth'] = md5($member_id['password']);
		$_SESSION['twofactor_id'] = $member_id['user_id'];
		$_SESSION['twofactor_type'] = $member_id['twofactor_auth'];
				
		if ( isset($_POST['login_not_save']) AND intval($_POST['login_not_save']) ) {
			$_SESSION['no_save_cookie'] = 1;
		}
		
		$pin = generate_pin();
				
		$db->query( "DELETE FROM " . USERPREFIX . "_twofactor WHERE user_id='{$member_id['user_id']}'" );
				
		$db->query( "INSERT INTO " . USERPREFIX . "_twofactor (user_id, pin, date) values ('{$member_id['user_id']}', '{$pin}', '{$_TIME}')" );

		if ($member_id['twofactor_auth'] == 1) {

			$row = $db->super_query( "SELECT * FROM " . PREFIX . "_email WHERE name='twofactor' LIMIT 0,1" );

			$mail = new dle_mail( $config, $row['use_html'] );

			$row['template'] = stripslashes( $row['template'] );
			$row['template'] = str_replace( "{%username%}", $member_id['name'], $row['template'] );
			$row['template'] = str_replace( "{%pin%}", $pin, $row['template'] );
			$row['template'] = str_replace( "{%ip%}", $_IP, $row['template'] );
			
			$mail->send( $member_id['email'], $lang['twofactor_subj'], $row['template'] );
			
		}
		
		unset($pin);
		unset($row);
		unset($mail);
		$member_id = array ();

	}

}

if( $is_loged_in AND $config['log_hash'] AND ( ($_COOKIE['dle_hash'] != $member_id['hash']) OR (!$member_id['hash']) ) ) {
	
	$is_loged_in = false;
}


if( $is_loged_in AND $config['ip_control'] == '1' AND ! check_netz( $member_id['logged_ip'], $_IP ) AND $_REQUEST['subaction'] != 'dologin' ) $is_loged_in = false;

if( !$is_loged_in AND $attempt_login ) {
	
	$member_id = array();

	if (isset($_COOKIE) and is_array($_COOKIE) and count($_COOKIE)) {
		foreach ($_COOKIE as $key => $value) {
			set_cookie($key, '', 0);
		}
	}

	session_unset();
	session_destroy();
	
}

if ( $is_loged_in ) {
	
	define( 'LOGGED_IN', $is_loged_in );
	
	$dle_login_hash = sha1( SECURE_AUTH_KEY . $member_id['user_id'] . sha1($member_id['password']) . $member_id['hash'] );
	
}

if( isset($_REQUEST['activation']) AND $_REQUEST['activation'] == "yes" AND $lic_tr) {

	if( $member_id['user_group'] != 1 ) die();

	if ( isset($_REQUEST['dle_key']) AND $_REQUEST['dle_key'] )	dle_activation( $_REQUEST['dle_key'], get_domen_hash(), $config );
	elseif( isset($_REQUEST['site_code']) AND $_REQUEST['site_code']) dle_activation( $_REQUEST['site_code'], get_domen_hash(), $config, true );
	else die("{\"error\":true, \"message\":\"{$lang['trial_act6']} {$lang['key_format']} <b>XXXXX-XXXXX-XXXXX-XXXXX-XXXXX</b>\"}");
	
	exit();
}

if( $is_loged_in AND $member_id['user_group'] == 1 AND $lic_tr) {

	$activation_field = <<<HTML
<script>
<!--
function dle_activation ( code ){
	ShowLoading('');

	if (code == 'key') {

		var dle_key = document.getElementById('sitekey').value ;
		var varsString = "dle_key=" + dle_key;

	} else {

		var site_code = document.getElementById('sitecode').value;
		var varsString = "site_code=" + site_code;
	}
	
	$.post('?' + varsString, { activation: "yes" }, function(data){
		
		HideLoading('');

		if (data.success) {

			$('#dle-activation').html(data.message);

		} else if (data.error) {

			DLEPush.error(data.message);

		}
	
	}, "json");

	return false;
}
//-->
</script>
HTML;

	if(!is_writable(ENGINE_DIR . '/data/config.php')) {
	
		$lang['stat_system'] = str_replace ("{file}", "engine/data/config.php", $lang['stat_system']);
	
		$fail = "<div class=\"alert alert-warning alert-styled-left alert-arrow-left alert-component alert alert-info alert-styled-left alert-arrow-left alert-component text-size-small text-size-small\">{$lang['stat_system']}</div>";
	
	} else $fail = "";

	$activation_field .= "<div id=\"dle-activation\" class=\"alert alert-info alert-styled-left alert-arrow-left alert-component text-left\">{$lang['trial_info']}<div class=\"mt-10\"><input type=\"text\" name=\"sitekey\" id=\"sitekey\" placeholder=\"{$lang['trial_key']}\" class=\"classic width-400 mr-10\"><button onclick=\"dle_activation( 'key' ); return false;\" class=\"btn bg-teal btn-raised btn-sm mr-10\">{$lang['trial_act']}</button><a class=\"btn bg-brown btn-raised btn-sm\" href=\"{$lang['trial_info_3']}\" target=\"_blank\">{$lang['trial_info_2']}</a></div><div id=\"result_info\" class=\"mt-10\">{$lang['key_format']} <b>XXXXX-XXXXX-XXXXX-XXXXX-XXXXX</b><div class=\"text-muted text-size-small mt-10\">{$lang['trial_info_1']}</div></div></div>
	{$fail}";

} else $activation_field = "";

if($is_loged_in AND version_compare( $config['version_id'], VERSIONID , '<') AND $mod != "upgrade"  ) {

	if( $member_id['user_group'] == 1 ) {
		
		header( "Location: ?mod=upgrade&action=dbupgrade" );
		die();
		
	} else msg("error", $lang['addnews_denied'], $lang['upgr_notadm']);
	
}

if($is_loged_in AND COLLATE != "utf8" AND COLLATE != "utf8mb4" AND $mod != "upgrade" ) {
	
	if( $member_id['user_group'] == 1 ) {
		
		header( "Location: ?mod=upgrade&action=dbconvert" );
		die();
		
	} else msg("error", $lang['addnews_denied'], $lang['upgr_notadm']);

}

if( $lic_tr AND $is_loged_in AND $mod AND $mod != "editnews" AND $mod != "main" AND $mod != "upgrade") {
	
	$row = $db->super_query( "SELECT COUNT(*) as count FROM " . PREFIX . "_post" );
	$stats_news = $row['count'];
	
	$row = $db->super_query( "SELECT COUNT(*) as count FROM " . PREFIX . "_comments" );
	$count_comments = $row['count'];
	
	if( $stats_news > 100 ) msg( "error", "error", $lang['trial_limit'].'<br><br>'.$activation_field );
	if( $count_comments > 200 ) msg( "error", "error", $lang['trial_limit'].'<br><br>'.$activation_field );

}

$config['ip_control'] = $login_params['ip_control'];
$config['log_hash'] = $login_params['log_hash'];

if( $is_loged_in AND isset($_COOKIE['timeout_session']) AND intval($_COOKIE['timeout_session']) ) {

		$_SESSION['timeout_session'] = 1;
}

if ($is_loged_in AND isset($_SESSION['timeout_session']) AND $_SESSION['timeout_session']) {
	
	include_once (DLEPlugins::Check(ENGINE_DIR . '/inc/timeout.php'));
	
} elseif (!$is_loged_in AND isset($_SESSION['twofactor_auth']) AND $_SESSION['twofactor_auth']) {
	
	include_once (DLEPlugins::Check(ENGINE_DIR . '/inc/twofactor.php'));
	
} elseif ($mod == "lostpassword" AND !$is_loged_in) {
	
	include_once (DLEPlugins::Check(ENGINE_DIR . '/inc/lostpassword.php'));
	
} elseif (!$is_loged_in) {

	$m_auth = $config['auth_metod'] ? $lang['login_box_2'] : $lang['login_box_1'];
	$m_auth2 = $config['auth_metod'] ? "envelope" : "user";
	
	$sys_con_langs_arr = get_folder_list( 'language' );

	function makeDropDown($options, $name, $selected) {
		
		$output = "<select class=\"uniform\" data-width=\"100%\" name=\"{$name}\">\r\n";
		
		foreach ( $options as $value => $description ) {
			
			$output .= "<option value=\"$value\"";
			
			if( $selected == $value ) {
				$output .= " selected ";
			}
			
			$output .= ">{$description['name']}</option>\n";
		}
		
		$output .= "</select>";
		
		return $output;
	}

	$select_language = makeDropDown( $sys_con_langs_arr, "selected_language", $selected_language );

	include_once (DLEPlugins::Check(ENGINE_DIR . '/skins/default.skin.php'));

	$skin_login = str_replace("{mauth}", $m_auth, $skin_login);
	$skin_login = str_replace("{mauth2}", $m_auth2, $skin_login);
	$skin_login = str_replace("{select}", $select_language, $skin_login);
	$skin_login = str_replace( "{js_files}", build_js($js_array), $skin_login );
	$skin_login = str_replace( "{css_files}", build_css($css_array), $skin_login );
	
	if($result) {
		$skin_login = str_replace("{result}", "<div class=\"form-group\">".$result."</div>", $skin_login);
	} else {
		$skin_login = str_replace("{result}", "", $skin_login);
	}

	echo $skin_login;

	die();

} elseif ($is_loged_in) {

	if ( !$mod ) {

		include_once (DLEPlugins::Check(ENGINE_DIR . '/inc/main.php'));

	} elseif ( file_exists( DLEPlugins::Check(ENGINE_DIR . '/inc/' . $mod . '.php') ) ) {

		include_once (DLEPlugins::Check(ENGINE_DIR . '/inc/' . $mod . '.php'));

	} else {

		msg ( "error", $lang['index_denied'], $lang['mod_not_found'] );
	}
}

$db->close();
GzipOut();