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
*/
//error_log("This is a test log");

if (!empty($_GET['info'])) {
    phpinfo();
    exit();
}

define('DATALIFEENGINE', true);
define('ROOT_DIR', dirname(__FILE__));
define('ENGINE_DIR', ROOT_DIR . '/engine');

require_once(ENGINE_DIR . '/classes/plugins.class.php');
require_once(DLEPlugins::Check(ROOT_DIR . '/engine/init.php'));
echo "<pre>";
$total_time = 0;
foreach ($db->query_list as $query) {
    $time = floor($query['time']*1000)/1000;
    $total_time += $query['time'];
    echo $time  . ":" .$query['query'] . "\n";
}
echo "Total time: " . $total_time . "\n";
echo "Total queries: " . count($db->query_list) . "\n";