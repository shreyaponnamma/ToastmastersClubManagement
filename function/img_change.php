<?php
session_start();

//To Update Home Page Details
include "../config/config.php";

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}

//Update Images
if(isset($_POST['submit'])) {

    // Configure upload directory and allowed file types
    $upload_dir = '../upload/';
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
    $allowed_name = array('image1.jpg','image2.jpg','image3.jpg','president.jpg','vpedu.jpg','vpmem.jpg','vppr.jpg','secratary.jpg','tresurer.jpg','saa.jpg','achivement1.jpg','achivement2.jpg','achivement3.jpg');
    // Define maxsize for files i.e 2MB
    $maxsize = 10 * 1024 * 1024;

    // Checks if user sent an empty form
    if(!empty(array_filter($_FILES['files']['name']))) {

        // Loop through each file in files[] array
        foreach ($_FILES['files']['tmp_name'] as $key => $value) {

            $file_tmpname = $_FILES['files']['tmp_name'][$key];
           // echo "$file_tmpname";
            $file_name = $_FILES['files']['name'][$key];

            $file_size = $_FILES['files']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            // Set upload file path
            $filepath = $upload_dir.$file_name;
            //echo "$filepath";
            if (in_array(strtolower($file_name), $allowed_name)) {      //check for name
                // Check file type is allowed or not
                if (in_array(strtolower($file_ext), $allowed_types)) {      //check for extention
                    if (move_uploaded_file($file_tmpname, $filepath)) {
                        if($file_size <= $maxsize){
                            echo "<script>alert('Successfull')</script>";
                            echo "<script>window.location.replace('../public/home_page.php')</script>";

                        }
                        else{
                            echo "<script>alert('Max size exceed')</script>";
                            echo "<script>window.location.replace('../public/home_page.php')</script>";
                        }
                    } else {
                        echo "<script>alert('Error')</script>";
                    }
                }
            } else {
                echo "<script>alert('Inavlid name')</script>";
                echo "<script>window.location.replace('../public/home_page.php')</script>";
            }
        }
    }
    else {
            echo "<script>alert('no files selected')</script>";
            echo "<script>window.location.replace('../public/home_page.php')</script>";

        }

    }
//To update Officers name
if (isset($_POST['officer_up'])) {
    $presi = mysqli_real_escape_string($connect, $_POST["presi"]);
    $vpedu = mysqli_real_escape_string($connect, $_POST["vpedu"]);
    $vpmem = mysqli_real_escape_string($connect, $_POST["vpmem"]);
    $vppr = mysqli_real_escape_string($connect, $_POST["vppr"]);
    $secretary = mysqli_real_escape_string($connect, $_POST["secretary"]);
    $treasurer = mysqli_real_escape_string($connect, $_POST["treasurer"]);
    $saa = mysqli_real_escape_string($connect, $_POST["saa"]);


    $sql1 = "Update officers set president='$presi',vpedu='$vpedu',vpmem='$vpmem',vppr='$vppr',secretary='$secretary',treasurer='$treasurer',saa='$saa' where id = 1";
    $stmt = $connect->prepare($sql1);
    if ($connect->query($sql1) == TRUE) {
        echo "<script>alert('  Success full!!')</script>";
        echo "<script>window.location.replace('../public/home_page.php')</script>";
    } else {
        echo "<script>alert('Fail!!')</script>";
        echo "<script>window.location.replace('../public/home_page.php')</script>";
        error_log();
    }

}

//To Update Meeting details on home page
if (isset($_POST['meeting_up'])) {
    $title = mysqli_real_escape_string($connect, $_POST["title"]);
    $date = mysqli_real_escape_string($connect, $_POST["date"]);
    $time = mysqli_real_escape_string($connect, $_POST["time"]);
    $venue = mysqli_real_escape_string($connect, $_POST["venue"]);
    $tmod = mysqli_real_escape_string($connect, $_POST["tmod"]);


    $sql = "Update daily set title ='$title', date ='$date', time ='$time', venue='$venue',tmod='$tmod' where id = 1";
    $stmt = $connect->prepare($sql);
    if ($connect->query($sql) == TRUE) {
        echo "<script>alert('  Success full!!')</script>";
        echo "<script>window.location.replace('../public/home_page.php')</script>";

    } else {
        echo "<script>alert('Fail!!')</script>";
        echo "<script>window.location.replace('../public/home_page.php')</script>";
    }
}

?>