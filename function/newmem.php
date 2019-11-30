<?php


include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usn = mysqli_real_escape_string($connect, $_POST["usn"]);
    $mid = mysqli_real_escape_string($connect, $_POST["m_id"]);
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $year = mysqli_real_escape_string($connect, $_POST["year"]);
    $dob = mysqli_real_escape_string($connect, $_POST["dob"]);
    $gen = mysqli_real_escape_string($connect, $_POST["gender"]);
    $desig = mysqli_real_escape_string($connect, $_POST["desig"]);
    $level = mysqli_real_escape_string($connect, $_POST["level"]);

    $query1 = "INSERT INTO members (Usn,M_id,Name,Year,Dob,Gender,Designation,Level) VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $connect->prepare($query1);
    $stmt->bind_param('ssssdsss', $usn,$mid,$name,$year,$dob,$gen,$desig,$level);
    //echo "line1";
    if ($stmt->execute()) {
        echo "<script>alert('Member added')</script>";
        echo "<script>window.location.replace('../public/member_info.php')</script>";
    } else {
        echo "<script>alert('Member insertion failed !!')</script>";
        error_log($stmt->error);
        echo "<script>window.location.replace('../public/member_info.php')</script>";
    }


}
