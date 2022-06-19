<?php
include('nav.php');
include('../login_signup/connect.php');
// echo $_POST['phone'];
// echo $_POST['message'];
// echo $_SESSION['depart_date'];
?>
<main>
    <h1>Done</h1>
    <section id="add_post_section" class="add_post_section">
        <div id="add_post_form" class="add_post_form">
            <h2> Successfully reserved, you will receive a message in your email</h2>
            <img src="../img/verified_icon.png" width="250px" height="250px">
            <form action="../index.php" method="get">
                <div id="home_btn_div">
                    <button id="home_btn" type="submit">Home</button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php include('footer.php') ?>