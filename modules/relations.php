<?php
function printResult_id ($result_id) {
while (($row = $result_id->fetch_assoc()) !=false) {
   $id = $row['id'];
   $object_name = $row['type'];
   $address_impact = $row['addres_impact'];
   $other = $row['other'];
   include"config.php";
  $address_result = $mysql->query("SELECT * FROM `fias` WHERE `id` = '$address_impact'");
  $address = $address_result->fetch_assoc();
  $mysql->close ();
  $address_object = $address['addres'];
  $parametrs = $row['parametrs'];
   echo "<div class=\"relations-block\"> 
   <div><strong>id объекта -</strong> ".$id."</div><br/>
   <div><strong>Название:</strong> ".$object_name."</div>
   <div><strong>Адрес:</strong> ".$address_object."</div>
   <div><strong>Параметры объекта:</strong> ".$parametrs."</div>
   <div><strong>Прочее:</strong> ".$other."</div>
   </div>";
	}
  }
include"config.php";
$result_id = $mysql->query("SELECT * FROM `relations`");
printResult_id ($result_id);
$mysql->close ();
?>