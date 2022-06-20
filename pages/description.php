<?php
    session_start();
    error_reporting(0);
    include('nav.php');
    include('../login_signup/connect.php');
    $_SESSION['type'] = $_POST['type'];
    $_SESSION['city'] = $_POST['city'];
    $userID = $_SESSION['userID'];
    // $sql = "INSERT INTO posts (type, city, userID) VALUES ('$type', '$city', '$userID');";
    // mysqli_query($connect, $sql);
?>
<main>
    <div class="container_1-2-3">
        <div class="prev">
            <div class="prev_num_line margin">
                <div>
                    <span>1</span>
                </div>
                <div class="prev_right_line"></div>
            </div>
            <p class="prev_p">basics</p>
        </div>
        <div class="onit">
            <div class="onit_num_line margin">
                <div id="left_line2" class="onit_left_line">
                </div>
                <div>
                    <span>2</span>
                </div>
                <div id="right_line2" class="onit_right_line"></div>
            </div>
            <p id="p2" class="onit_p">Describe your service</p>
        </div>
        <div class="next">
            <div class="next_num_line margin">
                <div id="next_left_line3" class="next_left_line">
                </div>
                <div>
                    <span>3</span>
                </div>
            </div>
            <p id="p3" class="next_p">Describe your service</p>
        </div>
    </div>
    <section class="add_post_section">
        <div class="add_post_form">
            <h2>describe your service</h2>
            <form action="your_infos.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="title">Anounce title:</label>
                    <input type="text" name="title" placeholder="anounce title" required>
                </div>
                <div>
                    <label for="location">Location:</label>
                    <input type="text" name="location" placeholder="location" required>
                </div>
                <div>
                    <label for="Price">Price/night:</label>
                    <input type="number" name="price" placeholder="price" min="1" required>
                </div>
                <div>
                    <label for="description">describe your anounce:</label>
                    <textarea name="description" placeholder="description" required></textarea>
                </div>
                <div>
                    <label for="pictures">Add pictures:</label>
                    <input type="file" name="pictures[]" multiple>
                </div>
                <div>
                    <label for="size">Size:</label>
                    <input type="number" name="size" min="1" required>
                </div>
                <div>
                    <label for="rooms">Rooms:</label>
                    <input type="number" name="rooms" min="1" required>
                </div>
                <div>
                    <label for="kitchen">Kitchen:</label>
                    <input type="number" name="kitchen" min="1" required>
                </div>
                <div>
                    <label for="bathroom">Bathroom:</label>
                    <input type="number" name="bathroom" min="1" required>
                </div>
                <div>
                    <label for="bed">Bed:</label>
                    <input type="number" name="bed" min="1" required>
                </div>
                <div>
                    <label for="tv">Tvs:</label>
                    <input type="number" name="tv" min="1" required>
                </div>
                <div>
                    <label for="wifi">Wifi:</label>
                    <input type="number" name="wifi" min="1" required>
                </div>
                <div>
                    <label for="Clima">Clima:</label>
                    <input type="number" name="clima" min="1" required>
                </div>
                <div class="button">
                    <button type="submit" name="submit" value="Upload">Next</button>
                </div>
            </form>
            <a href="basic_infos.php?prev=true">Prev</a>
        </div>
    </section>
</main>
<style><?php include('../css/style.css') ?></style>
<?php include('footer.php') ?>