<?php
session_start();
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}

$id = $_GET['id'];
$sql = "Delete from views where id = '$id'";
mysqli_query($connect,$sql);

if( $connect->query($sql) == TRUE){
    echo  "<script>alert('Deleted')</script>";

    echo "<script>window.location.replace('../public/views_table.php')</script>";
} else {
    echo "<script>alert('Member deletion  failed !!')</script>";

    echo "<script>window.location.replace('../public/views_table.php)</script>";

}
?>