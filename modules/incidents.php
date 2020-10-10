<?php
function printResult ($result) {
while (($row = $result->fetch_assoc()) !=false) {	
$name_incident = $row["type_objective"];
include"config.php";
$relation_result = $mysql->query("SELECT * FROM `relations` WHERE `id` = '$name_incident'");
$relation = $relation_result->fetch_assoc();
$mysql->close ();
$name_relation = $relation['type'];
$date_begin = $row['date_begin'];
$date_end = $row['date_end'];
$view = $row['view'];
$other = $row['other'];
$additional_info = $row['additional_info'];
echo "<div class=\"row incident-block\">
<div class=col-md-8><div>".$name_relation."</div>
<div><strong>Вид случая:</strong> ".$view."</div>
<div><strong>Информация:</strong> ".$additional_info."</div>
<div><strong>Дата начала:</strong>".$date_begin."<br/><strong>Дата конца:</strong>".$date_end."</div>
</div>
<div class=col-md-4><div class=other-inf>".$other."</div>
</div></div>";
}
  }
include"config.php";
$result = $mysql->query("SELECT * FROM `incident`");
printResult ($result);
$mysql->close ();
?>