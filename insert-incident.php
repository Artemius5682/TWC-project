<?php
$date_begin = $_POST['date_begin'];
$date_end = $_POST['date_end'];
$type_objective = $_POST['type_objective'];
$view = $_POST['view'];
$additional_info = $_POST['additional_info'];
$other = $_POST['other'];
include "config.php";
$mysql -> query("INSERT INTO `incident` (`id`, `date_begin`, `date_end`, `type_objective`, `view`, `additional_info`, `other`) VALUES (NULL, '$date_begin', '2020-10-21', '$type_objective', '$view', '$additional_info', '$other')");
$mysql->close ();
header("Location:/");
?>