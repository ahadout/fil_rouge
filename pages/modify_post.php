<?php
    include('nav.php');
    include('../login_signup/connect.php');
    $numero_post = $_GET['numero_post'];
    $sql = "SELECT * FROM posts WHERE numero_post='$numero_post'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<main>
    <form id="modify_form" action="profile.php?modify=true&post_modified=<?php echo $numero_post?>" method="post">
        <div>
            <label for="type">Type of service</label>
            <select class="modify_form_select" id="service_type" name="type">
                <option value="maison">Maison</option>
                <option value="mini_hotel">Mini hotel</option>
                <option value="thing_to_do">Thing to do</option>
            </select>
        </div>
        <div>
            <label for="city">City</label>
            <select class="modify_form_select" id="city" name="city">
                <option value="tangier">Tangier</option>
                <option value="tetouan">Tetouane</option>
                <option value="houceima">Houceima</option>
            </select>
        </div>
        <div>
            <label for="title">Anounce title:</label>
            <input type="text" name="title" value="<?php echo $row['title'];?>" required>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" name="location" value="<?php echo $row['location'];?>" required>
        </div>
        <div>
            <label for="Price">Price/night:</label>
            <input type="number" name="price" value="<?php echo $row['price'];?>" required>
        </div>
        <div>
            <label for="description">describe your anounce:</label>
            <textarea name="description" value="<?php echo $row['description'];?>" required></textarea>
        </div>
        <div>
            <label for="size">Size:</label>
            <input type="number" name="size" value="<?php echo $row['size'];?>" required>
        </div>
        <div>
            <label for="rooms">Rooms:</label>
            <input type="number" name="rooms" value="<?php echo $row['rooms'];?>" required>
        </div>
        <div>
            <label for="kitchen">Kitchen:</label>
            <input type="number" name="kitchen" value="<?php echo $row['kitchen'];?>" required>
        </div>
        <div>
            <label for="bathroom">Bathroom:</label>
            <input type="number" name="bathroom" value="<?php echo $row['bathroom'];?>" required>
        </div>
        <div>
            <label for="bed">Bed:</label>
            <input type="number" name="bed" value="<?php echo $row['bed'];?>" required>
        </div>
        <div>
            <label for="tv">Tvs:</label>
            <input type="number" name="tv" value="<?php echo $row['tvs'];?>" required>
        </div>
        <div>
            <label for="wifi">Wifi:</label>
            <input type="number" name="wifi" value="<?php echo $row['wifi'];?>" required>
        </div>
        <div>
            <label for="Clima">Clima:</label>
            <input type="number" name="clima" value="<?php echo $row['clima'];?>" required>
        </div>
        <div>
            <button type="submit">Modify</button>
        </div>
    </form>
</main>
<?php include('footer.php') ?>
