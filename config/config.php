<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Dhaka");
$conn = new mysqli("localhost","root","","newspaper") or die(mysqli_connect_error($connection));