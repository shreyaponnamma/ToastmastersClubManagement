<?php
session_start();

//Mark Attendance=
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}

$id = $_GET['id'];
$sql = "Update guest set attendance = attendance+1 where id = '$id'";

if( $connect->query($sql) == TRUE){

    echo "<script>window.location.replace('../public/guest_info.php')</script>";

} else {
    echo "<script>alert('  failed !!')</script>";

    echo "<script>window.location.replace('../public/guest_info.php')</script>";

}
?>