<?php
    include '../config/config.php';
    session_start();
    $usn = $_POST['usn'];
    $password = $_POST['password'];

    $sql = "select * from login where usn ='$usn' and password = '$password'";
    $result = $connect->query($sql);

    if ($result->num_rows >0) {
        while ($row=$result->fetch_assoc()) {
            $usn = $row['Usn'];
            $username = $row['Name'];
            $role = $row['Role'];

            $_SESSION['name'] = $username;
            $_SESSION['usn'] = $usn;
            $_SESSION['role'] = $role;
        }


           if($role == 'admin') {
               header('location:../public/user.php');
               exit();
           } else if ($role == 'user') {
               header('location:../public/member_test.php');
               exit();
           } else {
               header('location:../');
           }
        //}

    }else
        header('location: user1.html');

