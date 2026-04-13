<?php
echo "姓名:$_POST[name]<p>";
echo "身分證:$_POST[id]<p>";
echo "班別:$_POST[inc]<p>";
echo "出生日期:$_POST[birthday]<p>";
echo "性別:$_POST[sex]<p>";
echo "聯絡地址:$_POST[address]<p>";
include ("db_info.php");
$sql="UPDATE `peopleinfo` SET `name`='$_POST[name]',`inc`='$_POST[inc]',`birthday`='$_POST[birthday]',`sex`='$_POST[sex]',`address`='$_POST[address]'WHERE`peopleinfo`.`id`='$_POST[id]';";

echo $sql; 
mysqli_query ($link,$sql );
mysqli_close ($link);
header('Location:Mview.php');
?>
