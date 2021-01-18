<?php
session_start();
//Funtion to add new testimonial
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
    $view = mysqli_real_escape_string($connect, $_POST["view"]);

    $query2 = "insert into views (name,mob,views) VALUES(?,?,?)";
    $stmt2 = $connect->prepare($query2);
    $stmt2->bind_param('sss',  $name,$mob,$view);
    //echo "line1";
    if ( $stmt2->execute()) {
        echo "<script>alert('Thank you')</script>";
        echo "<script>window.location.replace('../function/logout.php')</script>";
    } else {
        echo "<script>alert('Sorry!! Please try again')</script>";
        error_log($stmt2->error);
        echo "<script>window.location.replace('../public/Login.html')</script>";
    }
}
