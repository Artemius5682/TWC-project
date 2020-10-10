<?php
$type = $_POST['type'];
$addres_impact = $_POST['addres_impact'];
$parametrs = $_POST['parametrs'];
$other_relations = $_POST['other_relations'];
include"config.php";
$mysql -> query("INSERT INTO `relations` (`id`, `type`, `addres_impact`, `parametrs`, `other`)
 VALUES (NULL, '$type', '$addres_impact', '$parametrs', '$other_relations')");
$mysql->close ();
header("Location:/");
?>