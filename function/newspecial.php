<?php
session_start();
//Add Special Event

include "../config/config.php";


if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $date = mysqli_real_escape_string($connect, $_POST["date"]);
    $mno = mysqli_real_escape_string($connect, $_POST["mno"]);
    $event = mysqli_real_escape_string($connect, $_POST["event"]);
    $chair = mysqli_real_escape_string($connect, $_POST["chair"]);
    $co = mysqli_real_escape_string($connect, $_POST["co-chair"]);

    $query1 = "INSERT INTO special_events (date, m_no, event, chair, co_chair) VALUES(?,?,?,?,?)";
    $stmt = $connect->prepare($query1);
    $stmt->bind_param('sdsss', $date, $mno, $event, $chair, $co);
    //echo "line1";
    if ($stmt->execute()) {
        echo "<script>alert('Special Event added')</script>";
        echo "<script>window.location.replace('../public/special_event.php')</script>";
    } else {
        echo "<script>alert('Member insertion failed !!')</script>";
        error_log($stmt->error);
        echo "<script>window.location.replace('../public/special_event.php')</script>";
    }
    
}