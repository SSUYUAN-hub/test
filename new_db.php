<?php
echo "姓名:$_POST[name]<p>";
echo "身分證:$_POST[id]<p>";
echo "班別:$_POST[inc]<p>";
echo "出生日期:$_POST[birthday]<p>";
echo "性別:$_POST[sex]<p>";
echo "聯絡地址:$_POST[address]<p>";
include("db_info.php");
$sql = "INSERT INTO `peopleinfo` (`name`, `id`, `inc`, `birthday`, `sex`, `address`) VALUES ('$_POST[name]', '$_POST[id]', '$_POST[inc]', '$_POST[birthday]', '$_POST[sex]', '$_POST[address]');";

echo $sql;
mysqli_query($link, $sql);
mysqli_close($link);
header('Location:view.php');
