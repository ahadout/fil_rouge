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
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script><!-- React -->
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script><!-- React -->
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
                <ul>
                    <li><a href="#" id="sign_up">Sign-up</a></li>
                    <li><a href="#" id="login">Login</a></li>
                </ul>
                <ul>
                    <li><a href="#">things to do</a></li>
                    <li><a href="pages/add_post/basic_infos.php">rent your house</a></li>
                    <li><a href="#">help</a></li>
                </ul>
            </div>
        </nav>
        <div class="slider_container">
            <div class="welcom">
                <h1>Welcom to Chamal</h1>
            </div>
            <div class="title">
                <h2 id="caption">Dalia Beach</h2>
            </div>
            <div class="arrow_container">
                <button id="square_left" onclick="slide_left()"><p id="arrow_left"><</p></button>
                <button id="square_right" onclick="slide_right()"><p id="arrow_right">></p></span>
            </div>
        </div>
        <form class="search_form">
            <div class="search_location">
                <label>What's you direction ?</label>
                <input type="text" placeholder="Your direction..">
            </div>
            <div class="search_date">
                <label>Date</label>
                <input type="date">
            </div>
            <div class="search_btn">
                <button type="button">Search</button>
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
    <div class="pop-up is_displayed" id="sign_up_popup">
        <div class="sign-up_container">
            <div class="pop-up_title">
                <h2>Sign-up</h2>
                <span id="sign-up_close">X</span>
            </div>
            <div class="form_container">
                <form>
                    <div>
                        <input type="text" placeholder="Email">
                        <input type="number" placeholder="phone number">
                        <input type="password" placeholder="password">
                        <input type="password" placeholder="comfirm password">
                    </div>
                    <div>
                        <button id="submit_btn" type="submit">Submit</button>
                        <p>You already have an accout?<a href="#">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="pop-up is_displayed" id="login_popup">
        <div class="sign-up_container">
            <div class="pop-up_title">
                <h2>Login</h2>
                <span id="login_close">X</span>
            </div>
            <div class="form_container">
                <form>
                    <div>
                        <input type="text" placeholder="Email">
                        <input type="password" placeholder="password">
                    </div>
                    <div>
                        <button id="submit_btn" type="submit">Submit</button>
                        <p>You do not have an accout?<a href="#">Sing-up now</a></p>
                    </div>
                </form>
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
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card" style="width: 100%;">
                            <img src="img/akchour.jpg" class="card-img-top" alt="akchour">
                            <div class="card-body">
                                <h5 class="card-title">Post title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
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