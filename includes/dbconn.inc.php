<?php

$dbServername = "localhost";
$dbUsername = "PA3";
$dbPassword = "HocuGore123";
$dbName = "PA3_Karlo";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die ('Failed to connect to database: ' . mysqli_connection_error());
}
