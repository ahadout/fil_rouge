<?php
    include('nav.php');
    include('../login_signup/connect.php');
    $userID = $_GET['userID'];
    $numero_post = $_GET['numero_post'];

    $sql = "SELECT * FROM posts WHERE userID='$userID' AND numero_post='$numero_post'";
    $result = mysqli_query($connect, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    $sql3 = "SELECT * FROM users WHERE userID='$userID'";
    $result3 = mysqli_query($connect, $sql3);
    $row3 = mysqli_fetch_assoc($result3);

?>
<main>
    <section class="post_details_section">
        <h1><?php echo ucwords($row['title']); ?></h1>
        <p><?php echo ucwords($row['city']).', '. ucwords($row['location']); ?></p>
        <?php
            $numero_post = $_GET['numero_post'];
            $sql2 = "SELECT * FROM images WHERE numero_post='$numero_post'";
            $result2 = mysqli_query($connect, $sql2);
            $resultCheck2 = mysqli_num_rows($result2);
            if($resultCheck2 > 0){
                while($row2 = mysqli_fetch_assoc($result2)){
        ?>
        <img src="../image_uploded/<?php echo $row2['image'];?>">
        <?php
                }
            }
        ?>
        <div class="details_container">
            <div class="right">
                <div class="house_of">
                    <p><b>At the house of:</b> <span style="text-decoration: underline;"><?php echo $row3['first_name']. ' '. $row3['last_name'];?></span></p>
                </div>
                <div class="description">
                    <p><b>Description : </b><?php echo $row['description'];?></p>
                </div>
                <div class="house_parts">
                    <div class="two_parts">
                        <div class="size">
                            <div>
                                <img src="../img/size_icon1.png">
                            </div>
                            <div class="both">
                                <p class="title_part"><b>Size</b></p>
                                <p><?php echo $row['size']; ?>  m²</p>
                            </div>
                        </div>
                        <div class="size">
                            <div class="icon">
                                <img src="../img/room_icon1.png">
                            </div>
                            <div class="both">
                                <p class="title_part"><b>Rooms</b></p>
                                <p><?php echo $row['rooms']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="two_parts">
                        <div class="size">
                            <div>
                                <img src="../img/kitchen.png">
                            </div>
                            <div class="both">
                                <p class="title_part"><b>Kitchen</b></p>
                                <p><?php echo $row['kitchen']; ?></p>
                            </div>
                        </div>
                        <div class="size">
                            <div class="icon">
                                <img src="../img/shower_icon1.png">
                            </div>
                            <div class="both">
                                <p class="title_part"><b>Bathroom</b></p>
                                <p><?php echo $row['bathroom']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="two_parts">
                        <div class="size">
                            <div>
                                <img src="../img/bed_icon1.png">
                            </div>
                            <div class="both">
                                <p class="title_part"><b>Bed</b></p>
                                <p><?php echo $row['bed'];?></p>
                            </div>
                        </div>
                        <div class="size">
                            <div class="icon">
                                <img src="../img/tv_1.png">
                            </div>
                            <div class="both">
                                <p class="title_part"><b>Tvs</b></p>
                                <p><?php echo $row['tvs'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="two_parts">
                        <div class="size">
                            <div>
                                <img src="../img/wifi_icon1.png">
                            </div>
                            <div class="both">
                                <p class="title_part"><b>WiFi</b></p>
                                <p><?php echo $row['wifi'];?></p>
                            </div>
                        </div>
                        <div class="size">
                            <div class="icon">
                                <img src="../img/clima_icon1.png">
                            </div>
                            <div class="both">
                                <p class="title_part"><b>Clima</b></p>
                                <p><?php echo $row['clima'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left">
                <div>
                    <h3><?php echo $row['price']?>MAD /night</h3>
                    <?php if($_GET['reserved'] == 'false'){ echo '<p style="color: red;"><b>Enter a valid value:</b> depart date have to be bigger than the arrival date and arrival date bigger than or equal todys date</p>';} ?>
                </div>
                <form class="reserv_form" action="confirm_reserv.php?userID=<?php echo $_GET['userID']?>&numero_post=<?php echo $_GET['numero_post']?>" method="post">
                    <div class="date_inputs">
                        <div>
                            <label class="label" for="arrival_date">arrival_date ?</label>
                            <input id="arrival" type="date" name="arrival_date" required>
                        </div>
                        <div>
                            <label class="label" for="depart_date">depart_date ?</label>
                            <input id="depart" type="date" name="depart_date" required>
                        </div>
                    </div>
                    <button class="reserv_btn" type="submit" name="submit">Reserve</button>
                </form>
            </div>
            <div class="left_bottom">
                <?php 
                    $sql4 = "SELECT * FROM reservation WHERE numero_post='$numero_post'";
                    $result4 = mysqli_query($connect, $sql4);
                    $resultCheck4 = mysqli_num_rows($result4);
                    if($resultCheck4 > 0){
                        echo '<p><b>This annouce is already reserved on these dates:</b></p>';
                        while($row4 = mysqli_fetch_assoc($result4)){
                ?>
                <div>
                    <p><?php echo 'from: '. $row4['arrivage_date'].' to: '. $row4['depart_date']; ?></p>
                </div>
                <?php  }}?>
            </div>
        </form>
    </section>
</main>
<?php include('footer.php') ?>