<?php 
    error_reporting(0);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"><!-- home page style -->
    <link rel="stylesheet" href="css/popup.css"><!-- pop-ups style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"><!-- bootstrap -->
    <link href="css/all.min.css"><!-- font awesom -->
    <title>Chamal visit</title>
</head>
<body>
    <header id="header">
        <nav>
            <a href="#header"><img src="img/wave png.png" width="35px" height="35px"></a>
            <form class="nav_search_form" id="nav_search_form">
                <input type="text" placeholder="your deriction"/>
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="profile_container" id="profile_container">
                <img id="menu" src="img/menu icon.png" width="20px" height="20px">
                <img id="profile_icon" src="img/profil-de-lutilisateur.png" width="35px" height="35px">
            </div>
            <div class="nav_menu nav_menu_display" id="nav_menu">
                <?php 
                    if($_SESSION['isLogedin'] == 'true'){?>
                        <ul>
                            <li><a href="pages/profile.php"><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?></a></li>
                        </ul>
                <?php }else{ ?>
                <ul>
                    <li><a id="sign_up" href="#header">Sign-up</a></li>
                    <li><a id="login" href="#header">Login</a></li>
                </ul>
                <?php }?>
                <ul>
                    <li><a href="#">things to do</a></li>
                    <li><a <?php if(empty($_SESSION['userID'])){echo 'href="index.php?login=noUserID"';}else{echo 'href="pages/basic_infos.php"';}?>>rent your house</a></li>
                    <li><a href="#">help</a></li>
                </ul>
            </div>
        </nav>
        <div class="slider_container">
            <div class="welcom">
                <h1>Welcom to Chamal</h1>
            </div>
            <div class="title">
                <h2 id="caption">For best holiday</h2>
            </div>
            <div class="arrow_container">
                <button id="square_left" onclick="slide_left()"><p id="arrow_left"><</p></button>
                <button id="square_right" onclick="slide_right()"><p id="arrow_right">></p></button>
            </div>
        </div>
        <form class="search_form" action="index.php?display=search#main" method="post">
            <div class="search_location">
                <label>What's you direction ?</label>
                <select name="city">
                    <option value="all_cities" slected>All cities</option>
                    <option value="tangier">Tangier</option>
                    <option value="tetouan">Tetouane</option>
                    <option value="houceima">Houceima</option>
                </select>
                <!-- <input type="text" name="city" placeholder="Your direction.."> -->
            </div>
            <div class="search_date">
                <label>Date</label>
                <input type="date">
            </div>
            <div class="search_btn">
                <button type="submit" name="submit">Search</button>
            </div>
        </form>
        <div class="slide_container">
            <img class="slide state_1" id="slide_1" src="img/dalya_beach.jpg">
            <img class="slide state_2" id="slide_2" src="img/Sidi_kankouch_beach.jpg">
            <img class="slide state_2" id="slide_3" src="img/playa_rincon.jpg">
        </div>
        <div class="scroll_down">
            <a href="#main" id="scroll_down"><img src="img/down_icon.png" width="25px" height="25px"></a>
        </div>
    </header>
    <!-- sign up -->
    <div class="pop-up <?php if(($_GET['signup'] == 'true') or ($_GET['signup'] == 'false')){ echo('block');}else{echo('is_displayed');} ?>" id="sign_up_popup">
        <div class="sign-up_container">
            <div class="pop-up_title">
                <h2>Sign-up</h2>
                <span id="sign-up_close">X</span>
            </div>
            <div class="form_container">
                <?php 
                if($_GET['signup'] == 'true'){ 
                ?>
                    <p>succesfuly registred</p>
                <?php 
                }
                else if($_GET['signup'] == 'false'){
                ?>
                <p><b style="color: red;">This email is already registred</b></p>
                <form action="./login_signup/signup.php" method="post">
                    <div>
                        <input type="text" placeholder="First name" name="f_name" required>
                        <input type="text" placeholder="Last name" name="l_name" required>
                        <input type="text" placeholder="Email" name="email" required>
                        <input type="number" placeholder="phone number" name="phone" min="0" required>
                        <input type="password" placeholder="password" name="password" required>
                    </div>
                    <div>
                        <button id="submit_btn" type="submit" name="signup">Sign-up</button>
                        <p>You already have an accout?<a class="go_login" onclick="switch_to_login()">Login</a></p>
                    </div>
                </form>
                <?php } else{?>
                    <form action="./login_signup/signup.php" method="post">
                    <div>
                        <input type="text" placeholder="First name" name="f_name" required>
                        <input type="text" placeholder="Last name" name="l_name" required>
                        <input type="text" placeholder="Email" name="email" required>
                        <input type="number" placeholder="phone number" name="phone" min="0" required>
                        <input type="password" placeholder="password" name="password" required>
                    </div>
                    <div>
                        <button id="submit_btn" type="submit" name="signup">Sign-up</button>
                        <p>You already have an accout?<a class="go_login" onclick="switch_to_login()">Login</a></p>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- login -->
    <div class="pop-up <?php if(($_GET['login'] == 'true') or ($_GET['login'] == 'false') or ($_GET['login'] == 'noUserID') or ($_GET['login'] == 'logedout')){ echo('block');}else{echo(' is_displayed');} ?>" id="login_popup">
        <div class="sign-up_container">
            <div class="pop-up_title">
                <h2>Login</h2>
                <?php if(($_GET['login']=='true') or ($_GET['login']=='logedout')){echo '<a href="index.php?userID='.$_SESSION['userID'].'">X</a>';}else{?><span id="login_close">X</span><?php }?>
            </div>
            <div class="form_container">
                <?php 
                if($_GET['login'] == 'true'){ 
                ?>
                    <p>succesfuly loged in</p>
                <?php 
                }
                else if($_GET['login'] == 'false'){
                ?>
                <p><b style="color: red;">Email or password incorrect</b></p>
                <form action="./login_signup/login.php" method="post">
                    <div>
                        <input type="text" placeholder="Email" name="email" required>
                        <input type="password" placeholder="password" name="password" required>
                    </div>
                    <div>
                        <button id="submit_btn" type="submit" name="login">Submit</button>
                        <p>You do not have an accout?<a class="go_login" onclick="switch_to_signup()">Sing-up now</a></p>
                    </div>
                </form>
                <?php
                }
                else if($_GET['login'] == 'noUserID'){
                ?>
                <p><b style="color: red;">You have to Log_in to continue</b></p>
                <form action="./login_signup/login.php" method="post">
                    <div>
                        <input type="text" placeholder="Email" name="email" required>
                        <input type="password" placeholder="password" name="password" required>
                    </div>
                    <div>
                        <button id="submit_btn" type="submit" name="login">Submit</button>
                        <p>You do not have an accout?<a class="go_login" onclick="switch_to_signup()">Sing-up now</a></p>
                    </div>
                </form>
                <?php }else if($_GET['login'] == 'logedout'){?>
                    <p><b style="color: red;">You just log-out your account</b></p>
                    <form action="./login_signup/login.php" method="post">
                        <div>
                            <input type="text" placeholder="Email" name="email" required>
                            <input type="password" placeholder="password" name="password" required>
                        </div>
                        <div>
                            <button id="submit_btn" type="submit" name="login">Submit</button>
                            <p>You do not have an accout?<a class="go_login" onclick="switch_to_signup()">Sing-up now</a></p>
                        </div>
                    </form>
                <?php }else{?>
                    <form action="./login_signup/login.php" method="post">
                    <div>
                        <input type="text" placeholder="Email" name="email" required>
                        <input type="password" placeholder="password" name="password" required>
                    </div>
                    <div>
                        <button id="submit_btn" type="submit" name="login">Submit</button>
                        <p>You do not have an accout?<a class="go_login" onclick="switch_to_signup()">Sing-up now</a></p>
                    </div>
                    </form>
                <?php }?>
            </div>
        </div>
    </div>
    <main class="main" id="main">
        <section class="section1">
            <div class="main_title">
                <h4 class="text-secondary">Houses for rent offers :</h4>
                <i class="fa-solid fa-filter"></i>
            </div>
            <div class="container">
                <div class="row g-3">
                    <?php 
                        include 'login_signup/connect.php';
                        if(($_GET['display'] == 'search') and ($_POST['city'] != 'all_cities')){
                            $city = $_POST['city'];
                            $sql = "SELECT * FROM posts WHERE city='$city'";
                        }
                        else{
                            $sql = "SELECT * FROM posts";
                        }
                        $result = mysqli_query($connect, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0){
                            while ($row = mysqli_fetch_assoc($result)){
                                $userID = $row['userID'];
                                $sql2 = "SELECT first_name, last_name FROM users WHERE userID='$userID'";
                                $result2 = mysqli_query($connect, $sql2);
                                $publisher = mysqli_fetch_assoc($result2);
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="box card">
                            <!-- <img src="img/card_image.JPG" class="card-img-top" alt="akchour"> -->
                            <img src="./img/<?php echo $row['picture']; ?>" style="width:100%; height:100%;" class="card-img-top" alt="akchour">
                            <div class=" card-body">
                                <h5 class="card-title"><?php echo '<a class="link-dark text-decoration-none" href="pages/post_details.php?userID='.$row['userID'].'&numero_post='.$row['numero_post'].'">'.$row['title'].', '.$row['city'].'</a>'; ?></h5>
                                <p class="card-text text-muted">House rented by: <?php echo $publisher['first_name'] .' '. $publisher['last_name']; ?></p>
                                <p class="price"><b><?php echo $row['price'].'MAD/night' ?></b></p>
                            </div>
                        </div>
                    </div>
                    <?php }
                        }?>
                </div>
            </div>
        </section>
    </main>
    <!-- <footer>
        <ul class="footer_list">
            <li><a href="#">Search by map</a></li>
            <li><a href="#">Discover</a></li>
            <li><a href="#">Social media</a></li>
            <li><a href="#">Quetion? contact us</a></li>
        </ul>
        <button>Rent your house</button>
    </footer> -->
    <style>
        <?php include('css/style.css'); ?>
    </style>
    <script src="javaScript/slide-show.js"></script><!-- my script for slide images -->
    <script src="javaScript/nav_menu.js"></script><!-- my script for nav menu links -->
    <script src="https://kit.fontawesome.com/3866beb01d.js" crossorigin="anonymous"></script> <!-- font awesom -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script><!-- bootstrap -->

</body>
</html>