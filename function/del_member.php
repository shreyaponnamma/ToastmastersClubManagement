<?php
session_start();

//Funtion to delete Member Details
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}
$id = $_GET['usn'];

$sql = "delete from members where usn = '$id'";
$sql1 =  "delete from login where usn = '$id'";
mysqli_query($connect,$sql);

if( $connect->query($sql) && $connect->query($sql1) == TRUE){
    echo  "<script>alert('Member deleted')</script>";

    echo "<script>window.location.replace('../public/member_info.php')</script>";
} else {
    echo "<script>alert('Member deletion  failed !!')</script>";

    echo "<script>window.location.replace('../public/member_info.php')</script>";

}
?>