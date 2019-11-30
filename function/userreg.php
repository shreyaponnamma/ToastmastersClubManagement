<?php

include "../config/config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usn = mysqli_real_escape_string($connect, $_POST["usn"]);
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
    $role = mysqli_real_escape_string($connect, $_POST["role"]);

    $query = "INSERT INTO login (Usn,Name,Email,Password,Role) VALUES(?,?,?,?,?)";
    $stmt = $connect->prepare($query);
    $stmt->bind_param('sssss',$usn,$name, $email, $pass,$role);
    //echo "line1";
    if ($stmt->execute()) {
        echo "<script>alert('User added')</script>";
        echo "<script>window.location.replace('../public/login_info.php')</script>";
    } else {
        echo "<script>alert('User insertion failed !!')</script>";
        echo "<script>window.location.replace('../public/login_info.php')</script>";
    }
}

