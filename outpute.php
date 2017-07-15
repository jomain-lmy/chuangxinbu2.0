<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "YSYSWAN++";
$mima = $_['mima'];
$ming = $_['id'];

$conn = new mysqli ($servername,$username,$password);

//检测
if ($conn->connect_error){
    die("fild". $conn->connect_error);
}
echo "success";

mysqli_query($conn , "set names urf-8");













?>
