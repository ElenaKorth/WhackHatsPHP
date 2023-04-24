<?php
$dbServername = "datadev.devcatalyst.com";
$dbUsername = "mahs_VeggieTales";
$dbPassword = "mustangs";
$dbName = "mahs_VeggieTales";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>