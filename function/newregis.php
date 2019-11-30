<?php


include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usn = mysqli_real_escape_string($connect, $_POST["usn"]);
    $mid = mysqli_real_escape_string($connect, $_POST["mid"]);
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $year = mysqli_real_escape_string($connect, $_POST["year"]);
    $dob = mysqli_real_escape_string($connect, $_POST["dob"]);
    $gen = mysqli_real_escape_string($connect, $_POST["gen"]);
    $desig = mysqli_real_escape_string($connect, $_POST["desig"]);
    $level = mysqli_real_escape_string($connect, $_POST["level"]);
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
    $role = mysqli_real_escape_string($connect, $_POST["role"]);

    $query1 = "INSERT INTO members (Usn,M_id,Name,Year,Dob,Gender,Designation,Level) VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $connect->prepare($query1);
    $stmt->bind_param('ssssssss', $usn,$mid,$name,$year,$dob,$gen,$desig,$level);
    $query2 = "INSERT INTO login (Usn,Name,Email,Password,Role) VALUES(?,?,?,?,?)";
    $stmt2 = $connect->prepare($query2);
    $stmt2->bind_param('sssss', $usn,$name,$email,$pass,$role);
    //echo "line1";
    if ($stmt->execute() && $stmt2->execute()) {
        echo "<script>alert('Member added')</script>";
        echo "<script>window.location.replace('../public/member_info.php')</script>";
    } else {
        echo "<script>alert('Member insertion failed !!')</script>";
        error_log($stmt->error);
        echo "<script>window.location.replace('../public/member_info.php')</script>";
    }


}
