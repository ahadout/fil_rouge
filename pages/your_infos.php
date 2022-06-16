<?php include('nav.php') ?>
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
        <div class="onit">
            <div class="onit_num_line margin">
                <div id="next_left_line3" class="onit_left_line">
                </div>
                <div>
                    <span>3</span>
                </div>
            </div>
            <p id="p3" class="onit_p">Your infos</p>
        </div>
    </div>
    <section class="add_post_section">
        <div class="add_post_form">
            <h2>your contact informations</h2>
            <form action="post_added.php" method="post">
                <div>
                    <label for="name">Full name:</label>
                    <input type="text" name="name" placeholder="full name">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="text" name="email" placeholder="email">
                </div>
                <div>
                    <label for="phone">Phone N°:</label>
                    <input type="number" name="phone" placeholder="phone N°">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="number" name="password" placeholder="password">
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