<?php

session_start();
$dbservername = "localhost";
$dbusername = "webp";
$dbpassword = "Webp@1593";
$dbname = "libridb";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
