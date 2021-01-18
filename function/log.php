<?php
session_start();
//To Login
    include '../config/config.php';

    $usn1 = $_POST['usn'];
    $password = $_POST['password'];


    $sql = "select * from login where usn = '$usn1'";

    //$result = $connect->query($sql)
    $records = mysqli_query($connect,$sql);
    if ($records->num_rows >0) {
        while ($row = mysqli_fetch_assoc($records)) {
            $hash = $row['password'];
            $hash = substr( $hash, 0, 60 );

            if ((password_verify($password, $hash)) == TRUE) {
                echo"$usn1";
                $sql1 = "select * from login where usn = '$usn1' ";
                $result3 = $connect->query($sql1);
                if (!$result3) {
                    trigger_error('Invalid query: ' . $connect->error);
                }
                while ($row = $result3->fetch_assoc()) {
                    $usn = $row['usn'];
                    $username = $row['name'];
                    $role = $row['role'];

                    $_SESSION['name'] = $username;
                    $_SESSION['usn'] = $usn;
                    $_SESSION['role'] = $role;
                }
                if ($role == 'admin') {
                    echo "<script>window.location.replace('../public/admin.php')</script>";
                    exit();
                } else if ($role == 'user') {
                    echo "<script>window.location.replace('../public/member_page.php')</script>";
                    exit();
                } else {
                    echo "$role";
                }
            }else {
                echo "<script>window.location.replace('../function/user1.html')</script>";
            }
        }
    }
    ?>
