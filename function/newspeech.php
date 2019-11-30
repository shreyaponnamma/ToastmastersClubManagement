<?php


include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sl = mysqli_real_escape_string($connect, $_POST["sl"]);
    $usn = mysqli_real_escape_string($connect, $_POST["usn"]);
    $mno = mysqli_real_escape_string($connect, $_POST["mno"]);
    $date = mysqli_real_escape_string($connect, $_POST["date"]);
    $title = mysqli_real_escape_string($connect, $_POST["title"]);
    $level = mysqli_real_escape_string($connect, $_POST["level"]);
    $eve = mysqli_real_escape_string($connect, $_POST["eva"]);


    $query1 = "INSERT INTO speech (Sl_no,Usn,M_no,Date,Title,Level,Evaluator) VALUES(?,?,?,?,?,?,?)";
    $stmt = $connect->prepare($query1);
    $stmt->bind_param('ssdssss', $sl, $usn, $mno, $date, $title, $level, $eve);
    //echo "line1";
    if ($stmt->execute()) {
        echo "<script>alert('Speech added')</script>";
        echo "<script>window.location.replace('../public/speech_info.php')</script>";
    } else {
        echo "<script>alert('Speech insertion failed !!')</script>";
        echo "<script>window.location.replace('../public/speech_info.php')</script>";
    }



}