<?php

$dbServername = "datadev.devcatalyst.com";
$dbUsername = "mahs_VeggieTales";
$dbPassword = "mustangs";
$dbName = "mahs_VeggieTales";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

?>