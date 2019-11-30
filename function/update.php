<?php

include '../config/config.php';

$id = $_GET['A_id'];
$sql = "Update attendance set D_count =( D_count+1) where A_id = '$id'";

if( $connect->query($sql) == TRUE){
    $stmt1 = "SELECT * FROM attendance WHERE A_id = '$id'";
    $res = $connect->query($stmt1);
    $row = $res->fetch_assoc();
    $dc = $row['D_count'];
    $c = $row['Count'];


    $per = (($row['D_count']/$row['Count'])*100);
    $cal = "update attendance set Percentage = $per where A_id = '$id'";
    mysqli_query($connect, $cal);

        echo "<script>window.location.replace('../public/attendance_info.php')</script>";

} else {
    echo "<script>alert('  failed !!')</script>";

    echo "<script>window.location.replace('../public/attendance_info.php')</script>";

}