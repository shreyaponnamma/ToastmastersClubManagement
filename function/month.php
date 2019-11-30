<?php
include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $month = mysqli_real_escape_string($connect, $_POST["month"]);

    $sql = "alter table final_attendance Add column $month int(10)";
    $stmt = mysqli_query($connect, $sql);
    if ($stmt) {
        $sql = "select  * from attendance";
        $records = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($records)) {

            $per = $row['Percentage'];
            $aid = $row['A_id'];
            $cal = "update final_attendance set $month = $per where  A_id = $aid";
            mysqli_query($connect, $cal);
            $up = "update attendance set D_count ='0', Count = '0', Percentage = '0' where A_id = $aid ";
            mysqli_query($connect, $up);

        }
        echo "<script>window.confirm('Do you want to add')</script>";
        echo "<script>alert('sem added')</script>";

        echo "<script>window.location.replace('../public/anew.php')</script>";
    } else {
        echo "<script>alert('sem insertion failed !!')</script>";
        error_log($stmt->error);
        echo "<script>window.location.replace('../public/anew.php')</script>";
    }

}


