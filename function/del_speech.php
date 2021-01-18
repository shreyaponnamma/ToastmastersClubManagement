<?php
session_start();

//Funtion to Delete Speech Details
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}

$id = $_GET['sl_no'];

$sql = "Delete from speech where sl_no = '$id'";
mysqli_query($connect,$sql);

if( $connect->query($sql) == TRUE){
    echo  "<script>alert('Speech deleted')</script>";

    echo "<script>window.location.replace('../public/speech_detail.php')</script>";
} else {
    echo "<script>alert('Speech deletion  failed !!')</script>";

    echo "<script>window.location.replace('../public/speech_detail.php')</script>";

}
?>