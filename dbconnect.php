<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die('Could not connect: ' . mysqli_error());
}

$db_selected = mysqli_select_db($con, "employee");

if (!$db_selected) {
    die("Could not select database: " . mysqli_error());
}
?>
