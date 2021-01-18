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

    $sem = mysqli_real_escape_string($connect, $_POST["month"]);

    $sql = "Alter table final_attendance drop column $sem";
    //mysqli_query($connect, $sql);

    if ($connect->query($sql) == TRUE) {
        echo "<script>alert('Deleted')</script>";

        echo "<script>window.location.replace('../public/sem_attend.php')</script>";
    }
    else {
        echo "<script>alert('Deletion failed !!')</script>";

        echo "<script>window.location.replace('../public/sem_attend.php')</script>";
    }
}
?>