<?php 
session_start();
$_SESSION['isLogedin'] = 'false';
$_SESSION['email'] ='';
$_SESSION['password'] = '';
$_SESSION['useriID'] = '';
$_SESSION['first_name'] = '';
$_SESSION['last_name'] = '';
$_SESSION['phone_nuber'] = '';
$_SESSION['userID'] = '';
header("Location: ../index.php?login=logedout");
?>