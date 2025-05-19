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

define('SECURE_AUTH_KEY', 'xk#+ReX;DnH(,*md-m660TNB/`^@Fb7D&`Ty&3pv#,D1Gap2)X^r``(/9%j;[IKv');

$db = new db;

?>