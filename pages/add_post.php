<?php 
session_start();
include('../login_signup/connect.php');
$userID = $_SESSION['userID'];
$type = $_SESSION['type'];
$city = $_SESSION['city'];
$title = $_SESSION['title'];
$location = $_SESSION['location'];
$price = $_SESSION['price'];
$description = $_SESSION['description'];
$picture = $_SESSION['picture'];
$size = $_SESSION['size'];
$rooms = $_SESSION['rooms'];
$kitchen = $_SESSION['kitchen'];
$bathroom = $_SESSION['bathroom'];
$bed = $_SESSION['bed'];
$tv = $_SESSION['tv'];
$wifi = $_SESSION['wifi'];
$clima = $_SESSION['clima'];

$sql = "INSERT INTO posts (type,city,location,title,price,description,picture,size,rooms,kitchen,bathroom,bed,tvs,wifi,clima,userID) VALUES ('$type', '$city','$location','$title','$price','$description','$picture','$size','$rooms','$kitchen','$bathroom','$bed','$tv','$wifi','$clima','$userID');";
mysqli_query($connect, $sql);
header("Location: post_added.php");