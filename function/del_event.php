<?php
session_start();

//Funtion to delete Special Event
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}

$id = $_GET['id'];

$sql = "Delete from special_events where id = '$id'";
mysqli_query($connect,$sql);

if( $connect->query($sql) == TRUE){
    echo  "<script>alert('Special Event deleted')</script>";

    echo "<script>window.location.replace('../public/special_event.php')</script>";
} else {
    echo "<script>alert('Special Event failed !!')</script>";

    echo "<script>window.location.replace('../public/special_event.php')</script>";

}