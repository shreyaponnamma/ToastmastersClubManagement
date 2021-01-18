<?php
session_start();
//To Add New Member
include "../config/config.php";

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usn = mysqli_real_escape_string($connect, $_POST["usn"]);
    $mid = mysqli_real_escape_string($connect, $_POST["mid"]);
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $year = mysqli_real_escape_string($connect, $_POST["year"]);
    $dob = mysqli_real_escape_string($connect, $_POST["dob"]);
    $gen = mysqli_real_escape_string($connect, $_POST["gen"]);
    $level = mysqli_real_escape_string($connect, $_POST["level"]);
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $password = mysqli_real_escape_string($connect, $_POST["pass"]);
    //$role = mysqli_real_escape_string($connect, $_POST["role"]);
    $role = 'user';
    $password = password_hash($password, PASSWORD_DEFAULT);
    

    $query1 = "INSERT INTO members (usn,m_id,name,year,dob,gender,level) VALUES(?,?,?,?,?,?,?)";
    $stmt = $connect->prepare($query1);
    $stmt->bind_param('sssssss', $usn,$mid,$name,$year,$dob,$gen,$level);
    $query2 = "INSERT INTO login (usn,name,email,password,role) VALUES(?,?,?,?,?)";
    $stmt2 = $connect->prepare($query2);
    $stmt2->bind_param('sssss', $usn,$name,$email,$password,$role);
    //echo "line1";
    if ($stmt->execute() && $stmt2->execute()) {
        echo "<script>alert('Member added')</script>";
        echo "<script>window.location.replace('../public/member_info.php')</script>";
    } else {
        echo "<script>alert('Member Insertion failed !!')</script>";
        error_log($stmt->error);

        echo "<script>window.location.replace('../public/member_info.php')</script>";
    }

}
