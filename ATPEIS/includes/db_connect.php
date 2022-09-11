<?php
session_start();



$s_name ="localhost";
$un_mea = "root";
$password ="";

$db_name = "db_atpeis";
$conn = mysqli_connect($s_name, $un_mea, $password, $db_name);

if (!$conn){
    echo "Connection failed";
}


