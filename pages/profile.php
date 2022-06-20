<?php
    include('nav.php');
    include('../login_signup/connect.php');
    if($_GET['modify'] == 'true'){
        $numero_post = $_GET['post_modified'];
        $type = $_POST['type'];
        $city = $_POST['city'];
        $title = $_POST['title'];
        $location = $_POST['location'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $picture = $_POST['pictures'];
        $size = $_POST['size'];
        $rooms = $_POST['rooms'];
        $kitchen = $_POST['kitchen'];
        $bathroom = $_POST['bathroom'];
        $bed = $_POST['bed'];
        $tv = $_POST['tv'];
        $wifi = $_POST['wifi'];
        $clima = $_POST['clima'];
        $sql3 = "UPDATE posts SET type='$type',city='$city',location='$location',title='$title',price='$price',description='$description',picture='$picture',size='$size',rooms='$rooms',kitchen='$kitchen',bathroom='$bathroom',bed='$bed',tvs='$tv',wifi='$wifi',clima='$clima' WHERE numero_post='$numero_post';";
        mysqli_query($connect, $sql3);
    }
    else if($_GET['delete'] == 'delete_reserv'){
        $numero_post = $_GET['post_to_delete'];
        $sql3 = "DELETE FROM reservation WHERE numero_post='$numero_post';";
        mysqli_query($connect, $sql3);
        header('Location: profile.php?delete=delete_post&post_to_delete='.$numero_post);
    }
    else if($_GET['delete'] == 'delete_post'){
        $numero_post = $_GET['post_to_delete'];
        $sql3 = "DELETE FROM posts WHERE numero_post='$numero_post';";
        mysqli_query($connect, $sql3);
        header('Location: profile.php');
    }
    $userID = $_SESSION['userID'];
    $sql = "SELECT * FROM posts WHERE userID='$userID'";
    $result = mysqli_query($connect, $sql);
    $resultCheck = mysqli_num_rows($result);

    $sql2 = "SELECT * FROM reservation WHERE userID='$userID'";
    $result2 = mysqli_query($connect, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);
?>
<main>
    <img src="../img/profil-de-lutilisateur.png" height="100px" width="100px">
    <a href="../login_signup/logout.php" class="btn btn-danger">log out</a>
    <section class="profile_section">
        <h2>Your anounces:</h2>
        <div class="container">
            <div class="row g-3">
                <?php
                    if ($resultCheck > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="box card">
                        <img src="../img/<?php echo $row['picture'];?>" class="card-img-top" alt="anouncement">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']?></h5>
                            <p class="card-text text-muted">House rented by: you</p>
                            <p class="price"><b><?php echo $row['price'].'MAD/night' ?></b></p>
                            <a href="modify_post.php?numero_post=<?php echo $row['numero_post']; ?>" class="btn btn-primary">Modify</a>
                            <a href="profile.php?delete=delete_reserv&post_to_delete=<?php echo $row['numero_post'];?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                <?php }
                    }?>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php') ?>