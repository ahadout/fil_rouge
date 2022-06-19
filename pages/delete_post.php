<?php
    include('../login_signup/connect.php');
    if($_GET['delete'] == 'delete_reserv'){
            $numero_post = $_GET['post_to_delete'];
            $sql3 = "DELETE FROM reservation WHERE numero_post='$numero_post';";
            mysqli_query($connect, $sql3);
            header('Location: profile.php?delete=delete_post&post_to_delete='.$numero_post);
            // $sql4 = "DELETE FROM posts WHERE numero_post='$numero_post';";
            // mysqli_query($connect, $sql4);
        }
        else if($_GET['delete'] == 'delete_post'){
            $numero_post = $_GET['post_to_delete'];
            $sql3 = "DELETE FROM posts WHERE numero_post='$numero_post';";
            mysqli_query($connect, $sql3);
            header('Location: profile.php?delete=delete_post&post_to_delete='.$numero_post);
        }