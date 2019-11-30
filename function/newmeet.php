<?php


include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mno = mysqli_real_escape_string($connect, $_POST["mno"]);
    $date = mysqli_real_escape_string($connect, $_POST["date"]);
    $tmod = mysqli_real_escape_string($connect, $_POST["tmod"]);
    $gen_eva = mysqli_real_escape_string($connect, $_POST["gen_eva"]);
    $timer = mysqli_real_escape_string($connect, $_POST["timer"]);
    $ah_counter = mysqli_real_escape_string($connect, $_POST["ah_counter"]);
    $gram = mysqli_real_escape_string($connect, $_POST["gram"]);
    $ttm = mysqli_real_escape_string($connect, $_POST["ttm"]);

    $query1 = "INSERT INTO meeting (M_no,Date,Tmod,Gen_Eva,Timer,Ah_Counter,Grammarian,Ttm) VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $connect->prepare($query1);
    $stmt->bind_param('dsssssss', $mno,$date,$tmod,$gen_eva,$timer,$ah_counter,$gram,$ttm);
    //echo "line1";
    if ($stmt->execute()) {
        echo "<script>alert('Meeting added')</script>";
        echo "<script>window.location.replace('../public/meeting_info.php')</script>";
    } else {
        echo "<script>alert('Meeting insertion failed !!')</script>";
       echo "<script>window.location.replace('../public/meeting_info.php')</script>";
    }
}
