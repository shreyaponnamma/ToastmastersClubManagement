<?php
session_start();

//Function to delete login details
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}
$id = $_GET['usn'];

$sql = "Delete from login where usn = '$id'";
mysqli_query($connect,$sql);

if( $connect->query($sql) == TRUE){
    echo  "<script>alert('Member deleted')</script>";

    echo "<script>window.location.replace('../public/login_info.php')</script>";
    } else {
    echo "<script>alert('Member deletion  failed !!')</script>";

    echo "<script>window.location.replace('../public/login_info.php')</script>";

}
?>