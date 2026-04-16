<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpws = "";
$dbname = "people";
$link = @mysqli_connect($dbserver, $dbuser, $dbpws);
if (!$link)
    die("無法連接到 MySQL 伺服器: " . mysqli_connect_error());
mysqli_query($link, "SET NAMES utf8");
if (!@mysqli_select_db($link, $dbname))
    die("錯誤設定字符集: " . mysqli_error($link));