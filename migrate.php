<?php
$host = "tunnel.pagodabox.com";
$user = "yulanda";
$pass = "Glzo1YZS";
$db = 'mysql';
$mysql = new Mysqli($host,$user,$pass,$db,3306);
$res = $mysql->query("create database test");
var_dump($res);
?>
