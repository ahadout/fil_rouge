<?php
    session_start();
    error_reporting(0);
    $_SESSION['post'] = [];
    include('nav.php');
?>
<main>
    <div class="container_1-2-3">
        <div class="onit">
            <div class="onit_num_line margin">
                <div>
                    <span>1</span>
                </div>
                <div class="onit_right_line"></div>
            </div>
            <p class="onit_p">basics</p>
        </div>
        <div class="next">
            <div class="next_num_line margin">
                <div id="left_line2" class="next_left_line">
                </div>
                <div>
                    <span>2</span>
                </div>
                <div id="right_line2" class="next_righ_line"></div>
            </div>
            <p id="p2" class="next_p">Describe your service</p>
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
            <h2>general informations</h2>
            <form action="description.php" method="post">
                <div>
                    <label for="type">Type of service:</label>
                    <select id="service_type" name="type">
                        <option value="maison">Maison</option>
                        <option value="mini_hotel">Mini hotel</option>
                        <option value="thing_to_do">Thing to do</option>
                    </select>
                </div>
                <div>
                    <label for="city">City:</label>
                    <select id="city" name="city">
                        <option value="tangier">Tangier</option>
                        <option value="tetouan">Tetouane</option>
                        <option value="houceima">Houceima</option>
                    </select>
                </div>
                <div class="button">
                    <button type="submit">Next</button>
                </div>
                
            </form>
        </div>
    </section>
</main>
<style><?php include('../css/style.css') ?></style>
<?php include('footer.php') ?>