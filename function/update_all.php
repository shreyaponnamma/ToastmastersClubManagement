<?php

include '../config/config.php';


$sql = "Update attendance set Count = Count+1";

if( $connect->query($sql) == TRUE){
    $sql = "select  * from attendance";
    $records = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($records)){
        $per = (($row['D_count']/$row['Count'])*100);
        $usn = $row['Usn'];
        $cal = "update attendance set Percentage = ($per) where  Usn = $usn";
        mysqli_query($connect,$cal);

    }

    echo  "<script>alert('Updated')</script>";
    echo "<script>window.location.replace('../public/attendance_info.php')</script>";

} else {
    echo "<script>alert('  failed !!')</script>";

    echo "<script>window.location.replace('../public/attendance_info.php')</script>";

}