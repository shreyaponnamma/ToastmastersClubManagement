<?php
session_start();

//To update the count of conducted meetings
include '../config/config.php';

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}

$sql = "Update attendance set count = count+1";

if( $connect->query($sql) == TRUE){
    $sql = "select  * from attendance";
    $records = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($records)){
        $per = (($row['d_count']/$row['count'])*100);
        $usn = $row['usn'];
        $cal = "update attendance set percentage = ($per) where  usn = '$usn'";
        mysqli_query($connect,$cal);

    }
    echo  "<script>alert('Welcome to New Meeting')</script>";
    echo "<script>window.location.replace('../public/mark.php')</script>";

} else {
    echo "<script>alert('Failed Try Again!!')</script>";

    echo "<script>window.location.replace('../public/mark.php')</script>";

}
?>