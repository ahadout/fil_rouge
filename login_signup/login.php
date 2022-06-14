<?php
    include './connect.php';

    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND pass_word='$password'";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) === 1){
        $row=mysqli_fetch_assoc($result);

        if($row['email'] === $email && $row['pass_word'] === $password){
            session_start();
        }
        $_SESSION['isLogedin'] = 'true';
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['pass_word'];
        $_SESSION['useriID'] = $row['userID'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['phone_nuber'] = $row['phone_number'];
        header("Location: ../index.php?login=true");
    }
    else{
        $_SESSION['isLogedin'] = 'false';
        header("Location: ../index.php?login=false");
    }
?>