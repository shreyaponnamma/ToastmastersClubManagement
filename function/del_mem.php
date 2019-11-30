<?php

include '../config/config.php';

$id = $_GET['Usn'];

$sql = "Delete from login where Usn = '$id'";
mysqli_query($connect,$sql);

if( $connect->query($sql) == TRUE){
    echo  "<script>alert('Member deleted')</script>";

        echo "<script>window.location.replace('../public/login_info.php')</script>";
    } else {
    echo "<script>alert('Member deletion  failed !!')</script>";

    echo "<script>window.location.replace('../public/login_info.php')</script>";

}