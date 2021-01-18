<?php
session_start();

//generate QR code for Attendance
include('../config/config.php');
include '../phpqrcode/qrlib.php';


if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'user') {
    header("Location:../");
}

$usn = $_SESSION['usn'];

$name = 'code';
$path = '../uploads/';       //this is the path where it will be stored
$file = $path.$name.".png";
$pixel_Size = 10;
$frame_Size = 10;


QRcode::png($usn, $file,$pixel_Size,$frame_Size);

// Displaying the stored QR code from directory
echo "<center><img src='".$file."'></center>";
?>
