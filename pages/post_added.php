<?php
    // session_start();
    include('nav.php');
    // include('../login_signup/connect.php');
    // $userID = $_SESSION['userID'];
    // $type = $_SESSION['type'];
    // $city = $_SESSION['city'];
    // $title = $_SESSION['title'];
    // $location = $_SESSION['location'];
    // $price = $_SESSION['price'];
    // $description = $_SESSION['description'];
    // $picture = $_SESSION['picture'];
    // $size = $_SESSION['size'];
    // $rooms = $_SESSION['rooms'];
    // $kitchen = $_SESSION['kitchen'];
    // $bathroom = $_SESSION['bathroom'];
    // $bed = $_SESSION['bed'];
    // $tv = $_SESSION['tv'];
    // $wifi = $_SESSION['wifi'];
    // $clima = $_SESSION['clima'];
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
        <div class="prev">
            <div class="prev_num_line margin">
                <div id="left_line2" class="prev_left_line">
                </div>
                <div>
                    <span>2</span>
                </div>
                <div id="right_line2" class="prev_right_line"></div>
            </div>
            <p id="p2" class="prev_p">Describe your service</p>
        </div>
        <div class="prev">
            <div class="prev_num_line margin">
                <div id="next_left_line3" class="prev_left_line">
                </div>
                <div>
                    <span>3</span>
                </div>
            </div>
            <p id="p3" class="prev_p">Describe your service</p>
        </div>
    </div>
    <section class="add_post_section">
        <div class="add_post_form">
            <h2>Your anounce succesfuly added</h2>
            <img src="../img/verified_icon.png" width="250px" height="250px">
            <form action="../index.php" method="get">
                <div class="button">
                    <button type="submit">Home</button>
                </div>
            </form>
        </div>
    </section>
</main>
<style><?php include('../css/style.css') ?></style>
<?php include('footer.php') ?>