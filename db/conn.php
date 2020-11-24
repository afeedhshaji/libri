<?php

session_start();
$dbservername = "";
$dbusername = "";
$dbpassword = "";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);

if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}