<?php
session_start();

//Mark Attendance
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}

$id = $_GET['usn'];
$sql = "update attendance set d_count = if(count > d_count, d_count+1, d_count) where usn = '$id'";
if( $connect->query($sql) == TRUE){
    $stmt1 = "SELECT * FROM attendance WHERE usn = '$id'";
    $res = $connect->query($stmt1);
    $row = $res->fetch_assoc();
    $dc = $row['d_count'];
    $c = $row['count'];
    $per = (($row['d_count']/$row['count'])*100);
    $cal = "update attendance set percentage = ($per) where  usn = '$id'";
    mysqli_query($connect, $cal);
    echo "<script>window.location.replace('../public/mark.php')</script>";
} else {
    echo "<script>alert('  failed !!')</script>";

    echo "<script>window.location.replace('../public/mark.php')</script>";

}
?>