<?php
session_start();

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}
if(isset($_POST['but_upload'])) {
    $name = $_FILES['file']['name'];
    if ($name == 'poster.jpg') {
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg", "jpeg", "png", "gif");

        // Check extension
        if (in_array($imageFileType, $extensions_arr)) {

            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name);

        }
    }
    else{
        echo "<script>alert('Inavlid name')</script>";
        echo "<script>window.location.replace('../public/home_page.php')</script>";
    }
    echo "<script>alert('Successfull')</script>";
    echo "<script>window.location.replace('../public/home_page.php')</script>";

}

?>