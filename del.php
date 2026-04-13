<?php
include ("db_info.php");
$sql="DELETE FROM `peopleinfo` WHERE `peopleinfo`.`id` = '$_GET[id]'";
mysqli_query ($link,$sql);
mysqli_close ($link);
header('Location:Mview.php');
?>
