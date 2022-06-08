<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"><!-- home page style -->
    <link rel="stylesheet" href="../css/popup.css"><!-- pop-ups style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"><!-- bootstrap -->
    <link href="css/all.min.css"><!-- font awesom -->
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script><!-- React -->
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script><!-- React -->
    <title>Chamal visit</title>
</head>
<body>
    <header id="header">
        <nav>
            <a href="#header"><img src="../img/wave png.png" width="35px" height="35px"></a>
            <form class="nav_search_form" id="nav_search_form">
                <input type="text" placeholder="your deriction"/>
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="profile_container" id="profile_container">
                <img id="menu" src="../img/menu icon.png" width="20px" height="20px">
                <img id="profile_icon" src="../img/profil-de-lutilisateur.png" width="35px" height="35px">
            </div>
            <div class="nav_menu nav_menu_display" id="nav_menu">
                <ul>
                    <li><a href="#" id="sign_up">Sign-up</a></li>
                    <li><a href="#" id="login">Login</a></li>
                </ul>
                <ul>
                    <li><a href="#">things to do</a></li>
                    <li><a href="#">rent your house</a></li>
                    <li><a href="#">help</a></li>
                </ul>
            </div>
        </nav>
    </header>