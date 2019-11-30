<?php
$connect = new mysqli('localhost','tm_db','TOASTMASTERS','db_club');
if($connect->connect_error) {
    die('connection failed');
} else{
    //    echo 'connect worked';
//    developement only
}

