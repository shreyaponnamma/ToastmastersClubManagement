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
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $mob = mysqli_real_escape_string($connect, $_POST["mob"]);
    $sem = mysqli_real_escape_string($connect, $_POST["sem"]);
    $branch = mysqli_real_escape_string($connect, $_POST["branch"]);
    $attend = '0';
    $query2 = "INSERT INTO guest (name,mobile,branch,semester,attendance) VALUES(?,?,?,?,?)";
    $stmt2 = $connect->prepare($query2);
    $stmt2->bind_param('sssdd', $name,$mob,$branch,$sem,$attend);
    //echo "line1";
    if ( $stmt2->execute()) {
        echo "<script>alert('Welcome to VVCE Toastmasters')</script>";
        echo "<script>window.location.replace('../public/guest_info.php')</script>";
    } else {
        echo "<script>alert('Sorry!!')</script>";
        error_log($stmt2->error);
        echo "<script>window.location.replace('../public/guest_info.php')</script>";
    }
}
?>