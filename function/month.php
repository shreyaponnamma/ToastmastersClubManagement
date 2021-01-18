<?php
session_start();
include "../config/config.php";

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $month1 = mysqli_real_escape_string($connect, $_POST["month"]);
    $month = strtolower($month1);

    $sql = "alter table final_attendance Add column $month int(10)";
    $stmt = mysqli_query($connect, $sql);
    if ($stmt) {
        $sql = "select  * from attendance";
        $records = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($records)) {

            $per = $row['percentage'];
            $aid = $row['a_id'];
            $cal = "update final_attendance set $month = $per where  a_id = '$aid'";
            mysqli_query($connect, $cal);
            $up = "update attendance set d_count ='0', count = '0', percentage = '0' where a_id = '$aid' ";
            mysqli_query($connect, $up);

        }
        echo "<script>alert('Month added')</script>";
        echo "<script>window.location.replace('../public/sem_attend.php')</script>";
    } else {
        echo "<script>alert('Month insertion failed !!')</script>";
        error_log($stmt->error);
        echo "<script>window.location.replace('../public/sem_attend.php')</script>";
    }

}


