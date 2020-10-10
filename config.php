<?php
$name_base = "townhelper_bd";
$user_name = "mysql";
$user_password = "";
$host = "localhost";
$mysql = new mysqli($host, $user_name, "", $name_base);
$mysql->query ("set name'utf-8'");
?>