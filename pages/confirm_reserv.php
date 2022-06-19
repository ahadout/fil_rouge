<?php
    $userID = $_GET['userID'];
    $numero_post = $_GET['numero_post'];
    $date1 = $_POST['arrival_date'];
    $date2 = $_POST['depart_date'];
    $arrival_date = strtotime($date1);
    $depart_date = strtotime($date2);
    $days_reserved = ($depart_date - $arrival_date)/60/60/24;
    if($days_reserved <= 0){
        $location = 'Location: post_details.php?userID='.$userID.'&numero_post='.$numero_post.'&reserved=false';
        header($location);
    }
    else{
        include('nav.php');
        include('../login_signup/connect.php');
        $_SESSION['arrival_date'] = $date1;
        $_SESSION['depart_date'] = $date2;
        $sql = "SELECT * FROM posts WHERE userID='$userID' AND numero_post='$numero_post'";
        $result = mysqli_query($connect, $sql);
        $resultCheck = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
?>
<main>
    <section class="confirm_section">
        <div class="confirm_title">
            <h1><a href="post_details.php?userID=<?php echo $userID.'&numero_post='.$numero_post?>"><</a> Confirm reservation</h1>
        </div>
        <div class="details_container">
            <div class="right">
                <h2>Your travel</h2>
                <div class="dates">
                    <div class="arrival">
                        <p><b>Arrival date</b></p>
                        <p><?php echo $date1?></p>
                    </div>
                    <div class="depart">
                        <p><b>Depart date</b></p>
                        <p><?php echo $date2?></p>
                    </div>
                </div>
                <form action="reserv_done.php" method="post">
                    <div class="confirm_form">
                        <div class="phone">
                            <label>Phone number</label>
                            <input type="text" name="phone" placeholder="Phone number" required>
                        </div>
                        <div class="message">
                            <label for="message">Message for you host</label>
                            <textarea name="message" placeholder="message" required></textarea>
                        </div>
                    </div>
            </div>
            <div class="left">
                <div class="left_1">
                    <div class="image">
                        <img src="../img/card_image.JPG" width="100px" height="75px">
                    </div>
                    <div>
                        <h3><?php echo $row['title'];?></h3>
                        <p><?php echo $row['city'].', '.$row['location'];?></p>
                    </div>
                </div>
                <div class="left_2">
                    <p><b>Price details</b></p>
                    <div>
                        <p><?php echo $row['price'].'* '.$days_reserved?>nights</p>
                        <p><?php echo ($row['price']*$days_reserved);?>MAD</p>
                    </div>
                </div>
                <div class="left_3">
                    <p><b>Total (MAD)</b></p>
                    <p><b><?php echo ($row['price']*$days_reserved);?>MAD</b></p>
                </div>
                <button class="reserv_btn" type="submit" name="submit">Reseve</button></form>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php') ?>
<?php }?>