<!-- nav-bar to include -->
<?php 
session_start();  
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"><!-- home page style -->
    <link rel="stylesheet" href="../css/popup.css"><!-- pop-ups style -->
    <link rel="stylesheet" href="../css/add_post.css"><!-- add post style -->
    <link rel="stylesheet" href="../css/post_details.css"><!-- post details style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"><!-- bootstrap -->
    <link href="css/all.min.css"><!-- font awesom -->
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script><!-- React -->
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script><!-- React -->
    <title>Chamal visit</title>
</head>
<body>
    <header id="header_2">
        <nav>
            <a href="../index.php"><img src="../img/wave png.png" width="35px" height="35px"></a>
            <form class="nav_search_form" id="nav_search_form">
                <input type="text" placeholder="your deriction"/>
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="profile_container" id="profile_container">
                <img id="menu" src="../img/menu icon.png" width="20px" height="20px">
                <img id="profile_icon" src="../img/profil-de-lutilisateur.png" width="35px" height="35px">
            </div>
            <div class="nav_menu nav_menu_display" id="nav_menu">
                <?php 
                    if($_SESSION['isLogedin'] == 'true'){?>
                        <ul>
                            <li><a href="../pages/profile.php"><?php echo $_SESSION['last_name']; ?></a></li>
                        </ul>
                <?php }?>
                <ul>
                    <li><a href="#">things to do</a></li>
                    <li><a href="#">rent your house</a></li>
                    <li><a href="#">help</a></li>
                </ul>
            </div>
        </nav>
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
                        <input type="number" placeholder="phone number" min="0">
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