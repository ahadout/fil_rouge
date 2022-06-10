<?php include('nav.php') ?>
<main>
    <div class="container_1-2-3">
        <div class="container_1">
            <div class="_1">
                <div>
                    <span>1</span>
                </div>
                <div class="line1_"></div>
            </div>
            <p class="p1">basics</p>
        </div>
        <div class="container_2">
            <div class="_2">
            <div class="_line2"></div>
                <div>
                    <span>2</span>
                </div>
                <div class="line2_"></div>
            </div>
            <p class="p2">Describe your service</p>
        </div>
        <div class="container_3">
            <div class="_3">
            <div class="_line3"></div>
                <div>
                    <span>3</span>
                </div>
                <div class="line3_"></div>
            </div>
            <p class="p3">Describe your service</p>
        </div>
    </div>
    <section class="add_post_section">
        <div class="add_post_form">
            <h2>general informations</h2>
            <form>
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