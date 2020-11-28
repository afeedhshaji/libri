<?php
require('../db/conn.php');

$bookid = $_GET['id1'];
$rollno = $_GET['id2'];

$sql2 = "update record set Date_of_Issue=curdate(),Due_Date=date_add(curdate(),interval 180 day),Renewals_left=1 where BookId='$bookid' and RollNo='$rollno'";

if ($conn->query($sql2) === TRUE) {
    $sql4 = "update book set Availability=Availability-1 where BookId='$bookid'";
    $result = $conn->query($sql4);
    echo "<script type='text/javascript'>alert('Success')</script>";
    header("Refresh:1; url=issue_requests.php", true, 303);
} else {
    echo "<script type='text/javascript'>alert('Error')</script>";
    header("Refresh:1; url=issue_requests.php", true, 303);
}
