<?php
require('../db/conn.php');

// Book Id from URL search params
$id = $_GET['id'];


// Roll Num from session
$roll = $_SESSION['RollNo'];

$sql = "insert into LMS.record (RollNo,BookId,Time) values ('$roll','$id', curtime())";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
    header("Refresh:0.01; url=allbooks.php", true, 303);
} else {
    echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header("Refresh:0.01; url=allbooks.php", true, 303);
}