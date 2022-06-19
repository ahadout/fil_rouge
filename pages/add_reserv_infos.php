<?php
session_start();
include('../login_signup/connect.php');
$userID = $_SESSION['userID'];
$numero_post = $_GET['numero_post'];
$arrival_date = $_SESSION['arrival_date'];
$depart_date = $_SESSION['depart_date'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO reservation (arrivage_date,depart_date,phone_number,message,userID,numero_post) VALUES ('$arrival_date','$depart_date','$phone','$message','$userID','$numero_post');";
mysqli_query($connect, $sql);
header('Location: reserv_done.php');