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
// $picture = $_SESSION['picture'];
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

// $sql2 = "SELECT * FROM posts ORDER BY numero_post DESC LIMIT 1;";
// $result = mysqli_query($connect, $sql2);
// $resultCheck = mysqli_num_rows($result);
// if ($resultCheck > 0){
//     while ($row = mysqli_fetch_assoc($result)){
//         $numero_post = $row['numero_post'];
//     }
// }

// //add multiple pictures to database
// $countImages = count($picture['pictures']['name']);
// for($i=0; $i<$countImages; $i++){
//     $imageName = $picture['pictures']['name'][$i];
//     $imageTempName = $picture['image']['tmp_name'][$i];
//     $targetPath = "./image_uploded".$imageName;
//     if(move_uploaded_file($imageTempName, $targetPath)){
//         $sql3 = "INSERT INTO images(image,numero_post) VALUES ('$imageName', '$numero_post')";
//         mysqli_query($connect, $sql3);
//     }
// }
header("Location: add_images.php");