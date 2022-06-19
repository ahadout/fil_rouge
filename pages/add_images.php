<?php 
session_start();
include('../login_signup/connect.php');

$picture = $_SESSION['picture'];

$sql2 = "SELECT * FROM posts ORDER BY numero_post DESC LIMIT 1;";
$result = mysqli_query($connect, $sql2);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$numero_post = $row['numero_post'];

//add multiple pictures to database
$countImages = count($picture['pictures']['name']);
for($i=0; $i<$countImages; $i++){
    $imageName = $picture['pictures']['name'][$i];
    $imageTempName = $picture['pictures']['tmp_name'][$i];
    $targetPath = "../image_uploded/".$imageName;
    if(move_uploaded_file($imageTempName, $targetPath)){
        $sql3 = "INSERT INTO images(image,numero_post) VALUES ('$imageName', '$numero_post')";
        mysqli_query($connect, $sql3);
    }
}
// print_r($picture);
// echo '<br>'.$imageTempName;
header("Location: post_added.php");