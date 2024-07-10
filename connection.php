<?php
$databaseHost     = "localhost";
$databaseName     = "uas_web_4b";
$databaseUsername = "root";
/* 
config untuk windows 
$databasePassword = "";
*/
$databasePassword = "";

$con = mysqli_connect("$databaseHost", "$databaseUsername", "$databasePassword", "$databaseName");

if (mysqli_connect_errno()) {
  echo "<h1>Koneksi database error : " . mysqli_connect_errno() . "</h1>";
}
