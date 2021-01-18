<?php
session_start();
//Change Password
include "../config/config.php";

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'user') {
    header("Location:../");
}
$usn = $_SESSION['usn'];
$name = $_SESSION['name'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
    $rpass = mysqli_real_escape_string($connect, $_POST["rpass"]);
    $password = password_hash($pass, PASSWORD_DEFAULT);


    if ($pass == $rpass) {
        $sql = "update login set password = '$password' where usn = '$usn'";
        mysqli_query($connect, $sql);

        if ($connect->query($sql) == TRUE) {
            echo "<script>alert('Password changed')</script>";

            echo "<script>window.location.replace('../public/member_page.php')</script>";
        }
    }
    else {
        echo "<script>alert('Password updation failed !!')</script>";

        echo "<script>window.location.replace('../public/member_page.php')</script>";

    }


}


?>