<?php
require_once 'include/db_mysql.php';
$hostname="localhost";
$username="root";
$password="mysql";
$usertable="phys_teacher";

$db = new db;
$db->connect($hostname, $username, $password, $usertable,1);
unset($hostname, $username, $password, $usertable);
mysql_query("SET NAMES 'utf-8'");
?>