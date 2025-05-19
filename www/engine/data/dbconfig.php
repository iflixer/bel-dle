<?php

if( !defined( 'DATALIFEENGINE' ) ) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../../' );
	die( "Hacking attempt!" );
}

define ("DBHOST", "db");

define ("DBNAME", "dle");

define ("DBUSER", "dleuser");

define ("DBPASS", "dlepass");

define ("PREFIX", "dle");

define ("USERPREFIX", "dle");

define ("COLLATE", "utf8mb4");

define('SECURE_AUTH_KEY', 'IJg|1:5Y5VnC@7eGJIZ5R4/&apTrK*<ODY|{Ilpm k^alJ}lh(a`hG/Rxzi{G6T7');

$db = new db;

?>