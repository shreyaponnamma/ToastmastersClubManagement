<?php
session_start();

//Function to delete guest details
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}
$id = $_GET['id'];

$sql = "Delete from guest where id = '$id'";
mysqli_query($connect,$sql);

if( $connect->query($sql) == TRUE){
    echo  "<script>alert('Guest Detail deleted')</script>";

    echo "<script>window.location.replace('../public/guest_info.php')</script>";
} else {
    echo "<script>alert('Guest Detail failed !!')</script>";

    echo "<script>window.location.replace('../public/guest_info.php')</script>";

}
?>