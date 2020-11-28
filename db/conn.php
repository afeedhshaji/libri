<?php

session_start();
$dbservername = "";
$dbusername = "";
$dbpassword = "";
$dbname = "";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
