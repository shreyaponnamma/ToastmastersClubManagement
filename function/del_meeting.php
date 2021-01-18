<?php
session_start();

//Funtion to delete Meeting Details
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}
$id = $_GET['m_no'];

$sql = "Delete from meeting where m_no = '$id'";
mysqli_query($connect,$sql);

if( $connect->query($sql) == TRUE){
    echo  "<script>alert('Meeting deleted')</script>";

    echo "<script>window.location.replace('../public/meeting_info.php')</script>";
} else {
    echo "<script>alert('Meeting deletion  failed !!')</script>";

    echo "<script>window.location.replace('../public/meeting_info.php')</script>";

}
?>