<?php
    session_start();
    include './connect.php';

    if(isset($_POST['signup'])){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $query = mysqli_query($connect, "SELECT * FROM users WHERE email='$email'");

        if(mysqli_num_rows($query) > 0){
            header('Location: ../index.php?signup=false');
        }
        else{
            $sql = "INSERT INTO users (first_name,last_name,email,phone_number,pass_word) VALUES ('$f_name','$l_name','$email','$phone','$password')";
            $result = mysqli_query($connect, $sql);
            if($result){
                $_SESSION['isSignedup'] = true;
                header('Location: ../index.php?signup=true');
            }
        }
    }
?>