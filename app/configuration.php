<?php

/*
	Enter the MySQL connection information for your primary SetSeed database below: 
*/
//$mysql_database = "setseed_sites";
$mysql_database = "setseed_master";
$mysql_username = "setseed_master";
$mysql_password = "Bday@1404";
$mysql_server = "localhost";


/* 
	Enter the primary domain for this server. This can be a generic domain or subdomain that you use to identify and view this server. Enter it without http:// and without a trailing slash. 
*/
$primaryDomain = "app.sitebuilder.com.ng";



// Do not edit below this line //////////////////////////////////////////////////////////////////////////////////////////
$rootdir = dirname(dirname(__FILE__));define( 'ROOT_DIR', $rootdir );if (!isset($installer)) { require_once "boot.php"; }
?>