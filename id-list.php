<?php
function printResult_id ($result_id) {
while (($row = $result_id->fetch_assoc()) !=false) {
   $id = $row['id'];
   $object_name = $row['type'];
   echo "<p>id = ".$id." (".$object_name.")</p>";
	}
  }
include"config.php";
$result_id = $mysql->query("SELECT * FROM `relations`");
printResult_id ($result_id);
$mysql->close ();
?>