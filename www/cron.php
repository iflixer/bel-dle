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
 File: cron.php
-----------------------------------------------------
 Use: Cron operations
=====================================================
*/

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
To support the launch operations for the cron you need set a value 1 for the variable $allow_cron
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

$allow_cron = 0;

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Specify the number of backup files database for save on the server
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

$max_count_files = 5;

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Don't edit the code which follows below.
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

if ($allow_cron) {

    define('DATALIFEENGINE', true);
    define('AUTOMODE', true);
    define('LOGGED_IN', true);

    define('ROOT_DIR', dirname(__FILE__));
    define('ENGINE_DIR', ROOT_DIR . '/engine');

    require_once(ENGINE_DIR . '/classes/plugins.class.php');
    require_once(DLEPlugins::Check(ENGINE_DIR . '/inc/include/functions.inc.php'));
    include_once(DLEPlugins::Check(ROOT_DIR . '/language/' . $config['langs'] . '/website.lng'));

    date_default_timezone_set($config['date_adjust']);

    $cronmode = false;

    if (isset($_REQUEST['cronmode']) AND $_REQUEST['cronmode']) {
        $cronmode = $_REQUEST['cronmode'];
    } elseif (isset($_SERVER['argc']) && !empty($_SERVER['argc']) && $_SERVER['argc'] > 1) {
        $cronmode = $_SERVER['argv'][1];
    }

    $_REQUEST = array();
    $_POST = array();
    $_GET = array();
    $_REQUEST['user_hash'] = 1;
    $dle_login_hash = 1;

    if ($cronmode == "sitemap") {

        $_POST['action'] = "create";
        $member_id = array();
        $user_group = array();
        $member_id['user_group'] = 1;
        $user_group[$member_id['user_group']]['admin_googlemap'] = 1;

        $cat_info = get_vars("category");

        if (!is_array($cat_info)) {

            $cat_info = array();

            $db->query("SELECT * FROM " . PREFIX . "_category ORDER BY posi ASC");

            while ($row = $db->get_row()) {
                if (!$row['active']) {
                    continue;
                }

                $cat_info[$row['id']] = array();

                foreach ($row as $key => $value) {
                    $cat_info[$row['id']][$key] = stripslashes($value);
                }
            }
            set_vars("category", $cat_info);
            $db->free();
        }

        include_once(DLEPlugins::Check(ROOT_DIR . '/engine/inc/googlemap.php'));

        die("done");
    } elseif ($cronmode == "optimize") {

        $arr = array();
        $tables = "";

        $db->query("SHOW TABLES");
        while ($row = $db->get_array()) {
            if (substr($row[0], 0, strlen(PREFIX)) == PREFIX) {
                $tables .= ", `" . $db->safesql($row[0]) . "`";
            }
        }
        $db->free();

        $tables = substr($tables, 1);
        $query = "OPTIMIZE TABLE ";
        $query .= $tables;

        $db->query($query);
        die("done");
    } elseif ($cronmode == "antivirus") {

        include_once(DLEPlugins::Check(ENGINE_DIR . '/classes/antivirus.class.php'));

        $antivirus = new antivirus();
        $antivirus->scan_files(ROOT_DIR, false, true);

        if (count($antivirus->bad_files)) {
            $found_files = "";

            foreach ($antivirus->bad_files as $idx => $data) {
                if ($data['type']) {
                    $type = $lang['anti_modified'];
                } else {
                    $type = $lang['anti_not'];
                }
                $found_files .= "\n{$data['file_path']} {$type}\n";
            }

            $mail = new dle_mail($config);

            $message = $lang['anti_message_1'] . "\n{$found_files}\n{$lang['anti_message_2']}\n\n{$lang['lost_mfg']} " . $config['http_home_url'];
            $mail->send($config['admin_mail'], $lang['anti_subj'], $message);
        }

        die("done");

    } else {

        $files = array();
        $disk = DLEFiles::getDefaultStorage();
        $config['backup_remote'] = intval($config['backup_remote']);
        if( $config['backup_remote'] > -1 )  $disk = $config['backup_remote'];

        if( $disk ) {

            DLEFiles::init($disk, false);

            $tmp_files = DLEFiles::ListDirectory("backup/", array("sql", "gz", "bz2"));

            if (!DLEFiles::$error) {

                foreach ($tmp_files['files'] as $key) {
                    if (isset($key['name']) and $key['name']) {
                        $prefix = explode("_", $key['name'] );
                        $prefix = end($prefix);
                        $prefix = explode(".", $prefix);
                        $prefix = reset($prefix);

                        if (strlen($prefix) == 32) {
                            $files[] = $key['path'];
                        }
                    }
                }

            }

        } else {

            if (is_dir(ROOT_DIR . '/backup/') && $handle = opendir(ROOT_DIR . '/backup/')) {
                while (false !== ($file = readdir($handle))) {
                    if (preg_match("/^.+?\.sql(\.(gz|bz2))?$/", $file)) {

                        $prefix = explode("_", $file);
                        $prefix = end($prefix);
                        $prefix = explode(".", $prefix);
                        $prefix = reset($prefix);

                        if (strlen($prefix) == 32) {
                            $files[] = $file;
                        }
                    }
                }

                closedir($handle);
            }

        }

        sort($files);
        reset($files);

        if (count($files) >= $max_count_files) {

            if ($disk) {
                DLEFiles::Delete($files[0]);
            } else {
                unlink(ROOT_DIR . '/backup/' . $files[0]);
            }

        }

        $member_id = array();
        $member_id['user_group'] = 1;
        $member_id['name'] = "cron_auto_backup";
        $_REQUEST['action'] = "backup";
        $_POST['comp_method'] = 1;
        $_TIME = time();
        $_IP = "127.0.0.1";

        include_once(DLEPlugins::Check(ROOT_DIR . '/engine/inc/dumper.php'));

        die("done");
    }
}

die("Cron not allowed");
