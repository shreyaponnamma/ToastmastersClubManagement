<?php
session_start();
// function to delete qr codes , clear cache
if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}
$folder_path = "../uploads";
   

$files = glob($folder_path.'/*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file)) {
        // Delete the given file 
        unlink($file);

    }
}
echo "<script>alert('Cache Cleared')</script>";
echo "<script>window.location.replace('../public/mark.php')</script>";
?> 