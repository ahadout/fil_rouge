//sign up pop up display and animation
let sign_up = document.getElementById('sign_up');
let sign_up_popup = document.getElementById('sign_up_popup');
let close_signup = document.getElementById('sign-up_close');

sign_up.addEventListener('click', pop_up_signup)
close_signup.addEventListener('click', close_pop_up)

function close_pop_up(){
    sign_up_popup.classList.toggle('is_displayed');
    sign_up_popup.classList.toggle('pop-up_animation');
}
function pop_up_signup(){
    sign_up_popup.classList.toggle('is_displayed');
    sign_up_popup.classList.toggle('pop-up_animation');
    nav_menu.classList.toggle('nav_menu_display');
    nav_menu.classList.toggle('nav_menu_animation');
}

//login pop up display and animation
let login = document.getElementById('login');
let login_popup = document.getElementById('login_popup');
let login_close = document.getElementById('login_close');

login.addEventListener('click', pop_up_login)
login_close.addEventListener('click', close_login)

function close_login(){
    login_popup.classList.toggle('is_displayed');
    login_popup.classList.toggle('pop-up_animation');
}

function pop_up_login(){
    login_popup.classList.toggle('is_displayed');
    login_popup.classList.toggle('pop-up_animation');
    nav_menu.classList.toggle('nav_menu_display');
    nav_menu.classList.toggle('nav_menu_animation');
}