<?php
/*
=====================================================
 Sypex Dumper - by BINOVATOR
-----------------------------------------------------
 https://sypex.net/
-----------------------------------------------------
 Copyright (c) 2004-2025
=====================================================
 This code is protected by copyright
=====================================================
 File: dumper.php
-----------------------------------------------------
 Use: DB backub
=====================================================
*/


if( !defined( 'DATALIFEENGINE' ) OR !defined( 'LOGGED_IN' ) ) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../../' );
	die( "Hacking attempt!" );
}

header("Content-type: text/html; charset=utf-8");
header('X-Accel-Buffering: no');

if($member_id['user_group'] !=1){ msg("error", $lang['addnews_denied'], $lang['db_denied']); }

if( !defined('AUTOMODE') ) {
	if( !isset($_REQUEST['user_hash']) OR !$_REQUEST['user_hash'] OR $_REQUEST['user_hash'] != $dle_login_hash ) {
		echo $lang['sess_error']; die();
	}
}

@ini_set('max_execution_time', 0);
@ini_set('max_execution_time', 0);
@ini_set('implicit_flush', true);
@ini_set('output_buffering', 0);

@set_time_limit(0);

ob_end_flush();
ob_implicit_flush();
ob_ignore();

$db->query( "INSERT INTO " . USERPREFIX . "_admin_logs (name, date, ip, action, extras) values ('".$db->safesql($member_id['name'])."', '{$_TIME}', '{$_IP}', '24', '')" );

define('PATH', ROOT_DIR.'/backup/');
define('URL',  'backup/');
define('LIMIT', 1);
define('DBNAMES', DBNAME);
define('DBNUSER', DBUSER);
define('DBPREFIX',PREFIX);

if(!defined('VERSIONID')) {
	define( 'VERSIONID', $config['version_id'] );
}

define('CHARSET', 'auto');

define('RESTORE_CHARSET', 'utf8');

define('SC', 0);

define('ONLY_CREATE', 'MRG_MyISAM,MERGE,HEAP,MEMORY');

$timer = array_sum(explode(' ', microtime()));

$auth = 0;
$error = '';
$db_location = explode(":", DBHOST);

if (isset($db_location[1])) {

	$dblink = @mysqli_connect($db_location[0], DBNUSER, DBPASS, DBNAME, $db_location[1]);

} else {

	$dblink = @mysqli_connect($db_location[0], DBNUSER, DBPASS, DBNAME);

}

if ( $dblink ){
		$auth = 1;
}	else{
		$error = '#' . mysqli_connect_error();
}

$SK = new dumper();
define('C_DEFAULT', 1);
define('C_RESULT', 2);
define('C_ERROR', 3);
define('C_WARNING', 4);

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch($action){
	case 'backup':
		$SK->backup();
		break;
	case 'restore':
		$SK->restore();
		break;
	default:
		$SK->main();
}

mysqli_close( $dblink );

		if(!defined('AUTOMODE'))
		{
			echo "<SCRIPT>document.getElementById('timer').innerHTML = '" . round(array_sum(explode(' ', microtime())) - $timer, 4) . " sec.'</SCRIPT>";
		}

class dumper {

	public $SET = array();
	public $tabs = 0;
	public $records = 0;
	public $size = 0;
	public $comp = 0;

	public $only_create = array();
	public $forced_charset = false;
	public $restore_charset = '';
	public $restore_collate = '';
	public $mysql_version = '';
	public $filename = '';
	public $file_cache = '';

	function __construct() {
		global $dblink;

		$this->SET['last_action'] = 0;
		$this->SET['last_db_backup'] = '';
		$this->SET['tables'] = '';
		$this->SET['comp_method'] = 2;
		$this->SET['comp_level']  = 7;
		$this->SET['last_db_restore'] = '';
		$this->tabs = 0;
		$this->records = 0;
		$this->size = 0;
		$this->comp = 0;

		// Версия MySQL вида 40101
		preg_match("/^(\d+)\.(\d+)\.(\d+)/", mysqli_get_server_info($dblink), $m);
		$this->mysql_version = sprintf("%d%02d%02d", $m[1], $m[2], $m[3]);

		$this->only_create = explode(',', ONLY_CREATE);
		$this->forced_charset  = false;
		$this->restore_charset = $this->restore_collate = '';

		if (preg_match("/^(forced->)?(([a-z0-9]+)(\_\w+)?)$/", RESTORE_CHARSET, $matches)) {
			$this->forced_charset  = $matches[1] == 'forced->';
			$this->restore_charset = $matches[3];
			$this->restore_collate = !empty($matches[4]) ? ' COLLATE ' . $matches[2] : '';
		}
	}

	function backup() {
		global $lang, $config, $dblink;
		if (!isset($_POST['comp_method'])) $_POST['comp_method'] = $_GET['comp_method'];

		@set_error_handler("SXD_errorHandler", E_ALL ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE);
		$buttons = "<span id='save' STYLE='display: none;'>{$lang['dumper_1']}</span>";
		echo tpl_page(tpl_process($lang['dumper_2']), $buttons);

		$this->SET['last_action']     = 0;
		$this->SET['last_db_backup']  = DBNAMES;
		$this->SET['tables_exclude']  = 0;
		$this->SET['tables']          = DBPREFIX.'*';
		$this->SET['comp_method']     = isset($_POST['comp_method']) ? intval($_POST['comp_method']) : 0;
		$this->SET['comp_level']      = 5;

		$this->SET['tables']          = explode(",", $this->SET['tables']);

		    foreach($this->SET['tables'] AS $table){
    			$table = preg_replace("/[^\w*?^]/", "", $table);
				$pattern = array( "/\?/", "/\*/");
				$replace = array( ".", ".*?");
				$tbls[] = preg_replace($pattern, $replace, $table);
    		}

		if ($this->SET['comp_level'] == 0) {
		    $this->SET['comp_method'] = 0;
		}
		$db = $this->SET['last_db_backup'];

		if (!$db) {
			echo tpl_l($lang['dumper_3'], C_ERROR);
		    exit;
		}
		echo tpl_l("{$lang['dumper_20']} `{$db}`.");

		$tables = array();
        $result = mysqli_query($dblink, "SHOW TABLES");
		$all = 0;
        while($row = mysqli_fetch_array($result)) {
			$status = 0;
			if (!empty($tbls)) {
			    foreach($tbls AS $table){
    				$exclude = preg_match("/^\^/", $table) ? true : false;
    				if (!$exclude) {
    					if (preg_match("/^{$table}$/i", $row[0])) {
    					    $status = 1;
    					}
    					$all = 1;
    				}
    				if ($exclude && preg_match("/{$table}$/i", $row[0])) {
    				    $status = -1;
    				}
    			}
			}
			else {
				$status = 1;
			}
			if ($status >= $all) {
    			$tables[] = $row[0];
    		}
        }

		$tabs = count($tables);

		$result = mysqli_query($dblink, "SHOW TABLE STATUS");
		$tabinfo = array();
		$tab_charset = array();
		$tab_type = array();
		$tabinfo[0] = 0;
		$info = '';
		while($item = mysqli_fetch_assoc($result)){

			if(in_array($item['Name'], $tables)) {
				$res_rows = mysqli_query($dblink, "SELECT COUNT(*) as count FROM {$item['Name']}");
				$item_rows = mysqli_fetch_assoc($res_rows);
				
				$item['Rows'] = $item_rows['count'];
				$tabinfo[0] += $item['Rows'];
				$tabinfo[$item['Name']] = $item['Rows'];
				$this->size += $item['Data_length'];
				$tabsize[$item['Name']] = 1 + round(LIMIT * 1048576 / ($item['Avg_row_length'] + 1));
				if($item['Rows']) $info .= "|" . $item['Rows'];
				if (!empty($item['Collation']) && preg_match("/^([a-z0-9]+)_/i", $item['Collation'], $m)) {
					$tab_charset[$item['Name']] = $m[1];
				}
				$tab_type[$item['Name']] = isset($item['Engine']) ? $item['Engine'] : $item['Type'];
			}
		}
		$info = $tabinfo[0] . $info;

		$salt = str_shuffle("abchefghjkmnpqrstuvwxyz0123456789".sha1( random_bytes(32) ));

		$rand = "";

		for($i=0;$i < 9; $i++) {
			$rand .= $salt[random_int(0,72)];
		}

		if(!defined('AUTOMODE'))
		{

		  $name = $db . '_' . date("Y-m-d_H-i"). '_' . substr( md5(date("Y-m-d_H-i").DBHOST . DBNAME), 0, 5);

		} else {

		   $name = date("Y-m-d_H-i") . '_' . $db . '_' . md5($rand);

		}


        $fp = $this->fn_open($name, "w");
		echo tpl_l($lang['dumper_5']);
		$this->fn_write($fp, "#DLE|".VERSIONID."\n\n");
		$this->fn_write($fp, "#SKD101|{$db}|{$tabs}|" . date("Y.m.d H:i:s") ."|{$info}\n\n");
		$t=0;
		echo tpl_l(str_repeat("-", 60));
		$result = mysqli_query($dblink, "SET SQL_QUOTE_SHOW_CREATE = 1");

		if ($this->mysql_version > 40101 && CHARSET != 'auto') {
			mysqli_query($dblink, "SET NAMES '" . CHARSET . "'") or trigger_error ($lang['dumper_6'] . mysqli_error($dblink), E_USER_ERROR);
			$last_charset = CHARSET;
		}
		else{
			$last_charset = '';
		}
        foreach ($tables AS $table){

			if ($this->mysql_version > 40101 && $tab_charset[$table] != $last_charset && $tab_charset[$table] ) {
				if ( CHARSET == 'auto') {
					mysqli_query($dblink, "SET NAMES '" . $tab_charset[$table] . "'") or trigger_error ($lang['dumper_6'] . mysqli_error($dblink), E_USER_ERROR);
					echo tpl_l("{$lang['dumper_7']} `" . $tab_charset[$table] . "`.", C_WARNING);
					$last_charset = $tab_charset[$table];
				}
				else{
					echo tpl_l($lang['dumper_8'], C_ERROR);
					echo tpl_l($lang['dumper_9'].' `'. $table .'` -> ' . $tab_charset[$table] . ' ('.$lang['dumper_10'].' '  . CHARSET . ')', C_ERROR);
				}
			}
			echo tpl_l("{$lang['dumper_11']} `{$table}` [" . fn_int($tabinfo[$table]) . "].");

			$result = mysqli_query($dblink, "SHOW CREATE TABLE `{$table}`");
        	$tab = mysqli_fetch_array($result);
			
			$tab[1] = str_replace("utf8mb4_0900_ai_ci", "utf8mb4_general_ci", $tab[1]);
			
        	$this->fn_write($fp, "DROP TABLE IF EXISTS `{$table}`;\n{$tab[1]};\n\n");

        	if (in_array($tab_type[$table], $this->only_create)) {
				continue;
			}

            $NumericColumn = array();
            $result = mysqli_query($dblink, "SHOW COLUMNS FROM `{$table}`");
            $field = 0;
            while($col = mysqli_fetch_row($result)) {
            	$NumericColumn[$field++] = preg_match("/^(\w*int|year)/", $col[1]) ? 1 : 0;
            }
			$fields = $field;
            $from = 0;
			$limit = $tabsize[$table];
			$limit2 = round($limit / 3);
			if ($tabinfo[$table] > 0) {
			if ($tabinfo[$table] > $limit2) {
			    echo tpl_s(0, $t / $tabinfo[0]);
			}
			$i = 0;
			$this->fn_write($fp, "INSERT INTO `{$table}` VALUES");
            while(($result = mysqli_query($dblink, "SELECT * FROM `{$table}` LIMIT {$from}, {$limit}")) && ($total = mysqli_num_rows($result))){
            		while($row = mysqli_fetch_row($result)) {
                    	$i++;
    					$t++;

						for($k = 0; $k < $fields; $k++){
                    		if ($NumericColumn[$k])
                    		    $row[$k] = isset($row[$k]) ? $row[$k] : "NULL";
                    		else
                    			$row[$k] = isset($row[$k]) ? "'" . mysqli_real_escape_string($dblink, $row[$k]) . "'" : "NULL";
                    	}

    					$this->fn_write($fp, ($i == 1 ? "" : ",") . "\n(" . implode(", ", $row) . ")");
    					if ($i % $limit2 == 0)
    						echo tpl_s($i / $tabinfo[$table], $t / $tabinfo[0]);
               		}
					mysqli_free_result($result);
					if ($total < $limit) {
					    break;
					}
    				$from += $limit;
            }

			$this->fn_write($fp, ";\n\n");
    		echo tpl_s(1, $t / $tabinfo[0]);}
		}
		$this->tabs = $tabs;
		$this->records = $tabinfo[0];
		$this->comp = $this->SET['comp_method'] * 10 + $this->SET['comp_level'];
        echo tpl_s(1, 1);
        echo tpl_l(str_repeat("-", 60));
        $this->fn_close($fp);
		echo tpl_l("{$lang['dumper_12']} `{$db}` {$lang['dumper_13']}", C_RESULT);
		echo tpl_l("{$lang['dumper_14']}       " . round($this->size / 1048576, 2) . " MB", C_RESULT);
		$filesize = round(filesize(PATH . $this->filename) / 1048576, 2) . " MB";
		echo tpl_l("{$lang['dumper_15']} {$filesize}", C_RESULT);
		echo tpl_l("{$lang['dumper_16']} {$tabs}", C_RESULT);
		echo tpl_l("{$lang['dumper_17']}   " . fn_int($tabinfo[0]), C_RESULT);

		$disk = DLEFiles::getDefaultStorage();
		$config['backup_remote'] = intval($config['backup_remote']);
		if( $config['backup_remote'] > -1 )  $disk = $config['backup_remote'];

		if( $disk ) {

			echo tpl_l($lang['dumper_33'], C_RESULT);

			DLEFiles::init( $disk );

			if (!DLEFiles::$error) {

				$stream = @fopen(PATH . $this->filename, 'rb');

				if (is_resource($stream)) {

					DLEFiles::WriteStream(URL . $this->filename, $stream);

				} else {

					DLEFiles::$error = 'PHP Error: Unable to open the stream with uploaded file';
				}

				if (is_resource($stream)) {
					fclose($stream);
				}

				if (DLEFiles::$error) {
					echo tpl_l(DLEFiles::$error, C_ERROR);
				} else {
					unlink(PATH . $this->filename);
				}

			} else echo tpl_l(DLEFiles::$error, C_ERROR);

			echo tpl_l($lang['dumper_34'], C_RESULT);
		}

		if(!defined('AUTOMODE'))
		{
			echo "<script>if (document.getElementById('save')) {document.getElementById('save').style.display = ''; }</script>";
		}

	}

	function restore(){
		global $config, $lang, $dblink;

		if (!isset($_POST['file'])) $_POST['file'] = $_GET['file'];

		@set_error_handler("SXD_errorHandler", E_ALL ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE);
		$buttons = "";
		echo tpl_page(tpl_process($lang['dumper_18']), $buttons);

		$this->SET['last_action']     = 1;
		$this->SET['last_db_restore'] = DBNAMES;
		$file = isset($_POST['file']) ? $_POST['file'] : '';

		$file = str_replace( "\\", "/", $file );
		$file = str_replace( "..", "", $file );
		$file = str_replace( "/", "", $file );

		if( stripos ( $file, "php" ) !== false ) die("Hacking attempt!");

		$db = $this->SET['last_db_restore'];

		if (!$db) {
			echo tpl_l($lang['dumper_19'], C_ERROR);
		    exit;
		}

		$disk = DLEFiles::getDefaultStorage();
		$config['backup_remote'] = intval($config['backup_remote']);
		if ($config['backup_remote'] > -1)  $disk = $config['backup_remote'];

		if ( $disk ) {
			DLEFiles::init( $disk );

			if (!DLEFiles::FileExists(URL . $file)) {
				echo tpl_l($lang['dumper_21'], C_ERROR);
				exit;
			}

			$handle = DLEFiles::ReadStream(URL . $file);

			if (DLEFiles::$error) {
				echo tpl_l(DLEFiles::$error, C_ERROR);
				exit;
			}

			$stream = @fopen(PATH . $file, 'wb');

			if (!is_resource($stream)) {
				echo tpl_l($lang['dumper_35'], C_ERROR);
				exit;
			}

			if (is_resource($handle)) {

				while (!feof($handle)) {

					fwrite($stream, fread($handle, 8192));

				}

				fclose($handle);
			}

			if (is_resource($stream)) {
				fclose($stream);
			}

			if (is_resource($handle)) {
				fclose($handle);
			}

		}

		echo tpl_l("{$lang['dumper_20']} `{$db}`.");


		if(preg_match("/^(.+?)\.sql(\.(bz2|gz))?$/", $file, $matches)) {
			if (isset($matches[3]) && $matches[3] == 'bz2') {
			    $this->SET['comp_method'] = 2;
			}
			elseif (isset($matches[2]) &&$matches[3] == 'gz'){
				$this->SET['comp_method'] = 1;
			}
			else{
				$this->SET['comp_method'] = 0;
			}
			
			$this->SET['comp_level'] = 0;
			
			if (!file_exists(PATH . "/{$file}")) {
    		    echo tpl_l($lang['dumper_21'], C_ERROR);
    		    exit;
    		}

			echo tpl_l("{$lang['dumper_22']} `{$file}`.");
			$file = $matches[1];
		}
		else {
			echo tpl_l($lang['dumper_21'], C_ERROR);
		    exit;
		}

		echo tpl_l(str_repeat("-", 60));
		$fp = $this->fn_open($file, "r");
		$this->file_cache = $sql = $table = $insert = '';
        $is_skd = $is_dle = $query_len = $execute = $q =$t = $i = $aff_rows = 0;
		$limit = 300;
        $index = 4;
		$tabs = 0;
		$info = array();
		$convert=false;

		if ($this->mysql_version > 40101 && (CHARSET != 'auto' || $this->forced_charset)) { 
			mysqli_query($dblink, "SET NAMES '" . $this->restore_charset . "'") or trigger_error ($lang['dumper_6'] . mysqli_error($dblink), E_USER_ERROR);
			echo tpl_l("{$lang['dumper_7']} `" . $this->restore_charset . "`.", C_WARNING);
			$last_charset = $this->restore_charset;
		}
		else {
			$last_charset = '';
		}
		
		$last_showed = '';
		
		while(($str = $this->fn_read_str($fp)) !== false){
			if (empty($str) || preg_match("/^(#|--)/", $str)) {
				if( !$is_dle AND !empty($str) ) {
					$dle_info = explode("|", $str);
					if($dle_info[0] == "#DLE" AND $dle_info[1] == VERSIONID) $is_dle = 1; else { echo tpl_l($lang['dumper_32'], C_ERROR); exit; }

				}

				if (!$is_skd && preg_match("/^#SKD101\|/", $str)) {
				    $info = explode("|", $str);
					echo tpl_s(0, $t / $info[4]);
					$is_skd = 1;
				}
        	    continue;
        	}
			$query_len += strlen($str);

			if (!$insert && preg_match("/^(INSERT INTO `?([^` ]+)`? .*?VALUES)(.*)$/i", $str, $m)) {
				if ($table != $m[2]) {
				    $table = $m[2];
					$tabs++;
					echo tpl_l("Table `{$table}`.");
					$last_showed = $table;
					$i = 0;
					if ($is_skd)
					    echo tpl_s(100 , $t / $info[4]);
				}
        	    $insert = $m[1] . ' ';
				$sql .= $m[3];
				$index++;
				$info[$index] = isset($info[$index]) ? $info[$index] : 0;
				$limit = round($info[$index] / 20);
				$limit = $limit < 300 ? 300 : $limit;
				if ($info[$index] > $limit){

					echo tpl_s(0 / $info[$index], $t / $info[4]);
				}
        	}
			else{
        		$sql .= $str;
				if ($insert) {
				    $i++;
    				$t++;
    				if ($is_skd && $info[$index] > $limit && $t % $limit == 0){
    					echo tpl_s($i / $info[$index], $t / $info[4]);
    				}
				}
        	}

			if (!$insert && preg_match("/^CREATE TABLE (IF NOT EXISTS )?`?([^` ]+)`?/i", $str, $m) && $table != $m[2]){
				$table = $m[2];
				$insert = '';
				$tabs++;
				$is_create = true;
				$i = 0;
			}
			if ($sql) {
			    if (preg_match("/;$/", $str)) {
            		$sql = rtrim($insert . $sql, ";");
					if (empty($insert)) {
						if ($this->mysql_version < 40101) {
				    		$sql = preg_replace("/ENGINE\s?=/", "TYPE=", $sql);
						}
						elseif (preg_match("/CREATE TABLE/i", $sql)){

							if (preg_match("/(CHARACTER SET|CHARSET)[=\s]+(\w+)/i", $sql, $charset)) {
								if (!$this->forced_charset && $charset[2] != $last_charset) {
									if (CHARSET == 'auto') {

										if ( $charset[2] == "cp1251" ) { $convert=true; $charset[2] = "utf8"; $this->restore_charset = "utf8"; }

										mysqli_query($dblink, "SET NAMES '" . $charset[2] . "'") or trigger_error ("{$lang['dumper_6']}{$sql}<BR>" . mysqli_error($dblink), E_USER_ERROR);
										echo tpl_l("{$lang['dumper_7']} `" . $charset[2] . "`.", C_WARNING);
										$last_charset = $charset[2];
									}
									else{
										echo tpl_l($lang['dumper_8'], C_ERROR);
										echo tpl_l($lang['dumper_9'].' `'. $table .'` -> ' . $charset[2] . ' ('.$lang['dumper_10'].' '  . $this->restore_charset . ')', C_ERROR);
									}
								}

								if ($this->forced_charset OR $convert) {
									$sql = preg_replace("/(\/\*!\d+\s)?((COLLATE)[=\s]+)\w+(\s+\*\/)?/i", '', $sql);
									$sql = preg_replace("/((CHARACTER SET|CHARSET)[=\s]+)\w+/i", "\\1" . $this->restore_charset . $this->restore_collate, $sql);
								}
							}
							elseif(CHARSET == 'auto'){ 
								$sql .= ' DEFAULT CHARSET=' . $this->restore_charset . $this->restore_collate;
								if ($this->restore_charset != $last_charset) {
									mysqli_query($dblink, "SET NAMES '" . $this->restore_charset . "'") or trigger_error ("{$lang['dumper_6']}{$sql}<BR>" . mysqli_error($dblink), E_USER_ERROR);
									echo tpl_l("{$lang['dumper_7']} `" . $this->restore_charset . "`.", C_WARNING);
									$last_charset = $this->restore_charset;
								}
							}
						}
						if ($last_showed != $table) {echo tpl_l("{$lang['dumper_9']} `{$table}`."); $last_showed = $table;}
					}
					elseif($this->mysql_version > 40101 && empty($last_charset)) {
						mysqli_query($dblink, "SET $this->restore_charset '" . $this->restore_charset . "'") or trigger_error ("{$lang['dumper_6']}{$sql}<BR>" . mysqli_error($dblink), E_USER_ERROR);
						echo tpl_l("{$lang['dumper_7']} `" . $this->restore_charset . "`.", C_WARNING);
						$last_charset = $this->restore_charset;
					}
            		$insert = '';
            	    $execute = 1;
            	}
            	if ($query_len >= 65536 && preg_match("/,$/", $str)) {
            		$sql = rtrim($insert . $sql, ",");
            	    $execute = 1;
            	}
    			if ($execute) {
            		$q++;

					if ($convert) {

						if( function_exists( 'mb_convert_encoding' ) ) {
					
							$sql = mb_convert_encoding( $sql, 'UTF-8', 'WINDOWS-1251' );
					
						} elseif( function_exists( 'iconv' ) ) {
						
							$sql = iconv( 'WINDOWS-1251', 'UTF-8', $sql );
						
						}

					}


            		mysqli_query($dblink, $sql) or trigger_error ($lang['dumper_23'] . mysqli_error($dblink), E_USER_ERROR);
					if (preg_match("/^insert/i", $sql)) {
            		    $aff_rows += mysqli_affected_rows($dblink);
            		}
            		$sql = '';
            		$query_len = 0;
            		$execute = 0;
            	}
			}
		}

		echo tpl_s(1 , 1);
		echo tpl_l(str_repeat("-", 60));
		echo tpl_l($lang['dumper_24'], C_RESULT);
		if (isset($info[3])) echo tpl_l("{$lang['dumper_25']} {$info[3]}", C_RESULT);
		echo tpl_l("{$lang['dumper_26']} {$q}", C_RESULT);
		echo tpl_l("{$lang['dumper_27']} {$tabs}", C_RESULT);
		echo tpl_l("{$lang['dumper_28']} {$aff_rows}", C_RESULT);

		$this->tabs = $tabs;
		$this->records = $aff_rows;
		$this->size = filesize(PATH . $this->filename);
		$this->comp = $this->SET['comp_method'] * 10 + $this->SET['comp_level'];

		$this->fn_close($fp);

		if ( $disk ) {
			unlink(PATH . $this->filename);
		}

		clear_all_caches();
	}

	function main(){
		die("Hacking attempt!");
	}

	function file_select(){
		$files = array('' => ' ');
		if (is_dir(PATH) && $handle = opendir(PATH)) {
            while (false !== ($file = readdir($handle))) {
                if (preg_match("/^.+?\.sql(\.(gz|bz2))?$/", $file)) {
                    $files[$file] = $file;
                }
            }
            closedir($handle);
        }
        ksort($files);
		return $files;
	}

	function fn_open($name, $mode) {
		global $lang;

		if ($this->SET['comp_method'] == 2) {
			$this->filename = "{$name}.sql.bz2";
			$fp = bzopen(PATH . $this->filename, "{$mode}");
		}
		elseif ($this->SET['comp_method'] == 1) {
			$this->filename = "{$name}.sql.gz";
			$fp = gzopen(PATH . $this->filename, "{$mode}b{$this->SET['comp_level']}");
		}
		else{
			$this->filename = "{$name}.sql";
			$fp = fopen(PATH . $this->filename, "{$mode}b");
		}
		if (is_resource($fp)) {

			return $fp;

		} else {

			echo tpl_l($lang['dumper_35'], C_ERROR);
			exit;

		}
	}

	function fn_write($fp, $str){
		if ($this->SET['comp_method'] == 2) {
		    bzwrite($fp, $str);
		}
		elseif ($this->SET['comp_method'] == 1) {
		    gzwrite($fp, $str);
		}
		else{
			fwrite($fp, $str);
		}
	}

	function fn_read($fp){
		if ($this->SET['comp_method'] == 2) {
		    return bzread($fp, 4096);
		}
		elseif ($this->SET['comp_method'] == 1) {
		    return gzread($fp, 4096);
		}
		else{
			return fread($fp, 4096);
		}
	}

	function fn_read_str($fp){
		$string = '';
		$this->file_cache = ltrim($this->file_cache);
		$pos = strpos($this->file_cache, "\n", 0);
		if ($pos < 1) {
			while (!$string && ($str = $this->fn_read($fp))){
    			$pos = strpos($str, "\n", 0);
    			if ($pos === false) {
    			    $this->file_cache .= $str;
    			}
    			else{
    				$string = $this->file_cache . substr($str, 0, $pos);
    				$this->file_cache = substr($str, $pos + 1);
    			}
    		}
			if (!$str) {
			    if ($this->file_cache) {
					$string = $this->file_cache;
					$this->file_cache = '';
				    return trim($string);
				}
			    return false;
			}
		}
		else {
  			$string = substr($this->file_cache, 0, $pos);
  			$this->file_cache = substr($this->file_cache, $pos + 1);
		}
		return trim($string);
	}

	function fn_close($fp){
		if ($this->SET['comp_method'] == 2) {
		    bzclose($fp);
		}
		elseif ($this->SET['comp_method'] == 1) {
		    gzclose($fp);
		}
		else{
			fclose($fp);
		}
	}

	function fn_select($items, $selected){
		$select = '';
		foreach($items AS $key => $value){
			$select .= $key == $selected ? "<OPTION VALUE='{$key}' SELECTED>{$value}" : "<OPTION VALUE='{$key}'>{$value}";
		}
		return $select;
	}

	function fn_save(){
		return;
	}

}

function fn_int($num){
	return number_format($num, 0, ',', ' ');
}

function tpl_page($content = '', $buttons = ''){
	global $config, $lang;

	if(defined('AUTOMODE'))
	{
	
	  return;
	
	}

return <<<HTML
<!doctype html>
<html lang="{$lang['language_code']}" dir="{$lang['direction']}">
<head>
<meta charset=utf-8">
<style type="text/css">
<!--
body{
	overflow: auto;
	font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: .85rem;
	line-height: 1.5;
}
form {
	margin:0px;
	padding: 0px;
}

table{
	border:0px;
	border-collapse:collapse;
}

table td{
	padding:0px;
	font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: .85rem;
}

input, select, div {
	font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: .85rem;
}
input.text, select {
	width: 100%;
}
fieldset {
	margin-bottom: 10px;
}
.progress-bar {
    float:left;
    width:0%;
    font-size:12px;
    line-height:20px;
    color:white;
    text-align:center;
    background-color:#428bca;
    -webkit-box-shadow:inset 0 -1px 0 rgba(0, 0, 0, 0.15);
    box-shadow:inset 0 -1px 0 rgba(0, 0, 0, 0.15);
    -webkit-transition:width 0.6s ease;
    transition:width 0.6s ease;
    -webkit-border-radius:8px;
    -moz-border-radius:8px;
    -ms-border-radius:8px;
    -o-border-radius:8px;
    border-radius:8px;
    -webkit-box-shadow:none;
    box-shadow:none;
    height:8px;
}
-->
</style>
</head>
<body>

<table width="100%">
    <tr>
        <td>
<TD VALIGN=TOP STYLE="padding: 8px 8px;">
{$content}
<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=2>
<TR>
<TD STYLE='color: #CECECE' id='timer'></TD>
<TD ALIGN=RIGHT>{$buttons}</TD>
</TR>
</TABLE></TD>
</td>
    </tr>
</table>



</body>
</HTML>
HTML;
}

function tpl_process($title){
	global $lang;

	if(defined('AUTOMODE'))
	{
	
	  return;
	
	}
	
ob_ignore();

return <<<HTML
<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=2>
<TR><TD COLSPAN=2 style="padding:2px;"><DIV ID=logarea STYLE="width: 100%; height: 180px; border: 1px solid #7F9DB9; padding: 3px; overflow: auto;"></DIV></TD></TR>
<TR><TD WIDTH=31% style="padding:2px; width:150px;">{$lang['dumper_29']}</TD><TD><TABLE WIDTH=100% style="border: 1px solid #7F9DB9;" CELLPADDING=0 CELLSPACING=0>
<TR><TD BGCOLOR=#FFFFFF><TABLE WIDTH=1 BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR=#5555CC ID=st_tab
STYLE="background-image:-webkit-gradient(linear, left 0%, left 100%, from(#9bcff5), to(#6db9f0));background-image:-webkit-linear-gradient(top, #9bcff5, 0%, #6db9f0, 100%);background-image:-moz-linear-gradient(top, #9bcff5 0%, #6db9f0 100%);background-image:linear-gradient(to bottom, #9bcff5 0%, #6db9f0 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FF9BCFF5', endColorstr='#FF6DB9F0', GradientType=0);"><TR><TD HEIGHT=12></TD></TR></TABLE></TD></TR></TABLE></TD></TR>
<TR><TD style="padding:2px; width:150px;">{$lang['dumper_30']}</TD><TD><TABLE WIDTH=100% style="border: 1px solid #7F9DB9;" CELLSPACING=0 CELLPADDING=0>
<TR><TD BGCOLOR=#FFFFFF><TABLE WIDTH=1 BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR=#00AA00 ID=so_tab
STYLE="background-image:-webkit-gradient(linear, left 0%, left 100%, from(#9bcff5), to(#6db9f0));background-image:-webkit-linear-gradient(top, #9bcff5, 0%, #6db9f0, 100%);background-image:-moz-linear-gradient(top, #9bcff5 0%, #6db9f0 100%);background-image:linear-gradient(to bottom, #9bcff5 0%, #6db9f0 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FF9BCFF5', endColorstr='#FF6DB9F0', GradientType=0);"><TR><TD HEIGHT=12></TD></TR></TABLE></TD>
</TR></TABLE></TD></TR></TABLE>
<SCRIPT>
var WidthLocked = false;
function s(st, so){
	document.getElementById('st_tab').width = st ? st + '%' : '1';
	document.getElementById('so_tab').width = so ? so + '%' : '1';
}
function l(str, color){
	switch(color){
		case 2: color = 'navy'; break;
		case 3: color = 'red'; break;
		case 4: color = 'maroon'; break;
		default: color = '';
	}
	with(document.getElementById('logarea')){
		if (!WidthLocked){
			style.width = clientWidth;
			WidthLocked = true;
		}
		if(color){
		   str = '<span style="color:' + color + ';">' + str + '</span>';
		}

		innerHTML += innerHTML ? "<BR>\\n" + str : str;
		scrollTop += 14;
	}
}
</SCRIPT>
HTML;
}

function tpl_l($str, $color = C_DEFAULT){

if(defined('AUTOMODE'))
{

  return;

}

ob_ignore();

$str = preg_replace("/\s{2}/", " &nbsp;", $str);
return <<<HTML
<SCRIPT>l('{$str}', $color);</SCRIPT>

HTML;
}

function tpl_s($st, $so){

if(defined('AUTOMODE'))
{

  return;

}

ob_ignore();

$st = round($st * 100);
$st = $st > 100 ? 100 : $st;
$so = round($so * 100);
$so = $so > 100 ? 100 : $so;
return <<<HTML
<SCRIPT>s({$st},{$so});</SCRIPT>

HTML;
}

function tpl_backup_index(){

if(defined('AUTOMODE'))
{

  return;

}

return <<<HTML
<CENTER>
<H1>access denied</H1>
</CENTER>

HTML;
}

function tpl_error($error){

if(defined('AUTOMODE'))
{

  return;

}

return <<<HTML
<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=2>
<TR>
<TD ALIGN=center>{$error}</TD>
</TR>
</TABLE>
HTML;
}

function SXD_errorHandler($errno, $errmsg, $filename, $linenum) {
	global $lang;
	if ($errno == 2048) return true;
	if (strpos ( $errmsg, "date():" ) !== false) return true;
    $dt = date("Y.m.d H:i:s");
    $errmsg = addslashes($errmsg);

	echo tpl_l("{$dt}<BR><B>{$lang['dumper_31']}</B>", C_ERROR);
	echo tpl_l("{$errmsg} ({$errno}) at the file {$filename} ({$linenum})", C_ERROR);
	die();
}

function ob_ignore() {

	$data = str_repeat(' ', 1000);

    $ob = array();
    while (ob_get_level()) {
        array_unshift($ob, ob_get_contents());
        ob_end_clean();
    }
    
    echo $data;
    
    foreach ($ob as $ob_data) {
        ob_start();
        echo $ob_data;
    }
	
    return count($ob);
}
?>