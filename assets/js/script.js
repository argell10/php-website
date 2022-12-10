//Execute functions
document.getElementById('btn_log-in').addEventListener('click', login);
document.getElementById('btn_register').addEventListener('click', register);
window.addEventListener('resize', widthPage);

//Define variables
const form_login = document.querySelector(".form_login");
const form_register = document.querySelector(".form_register");
const container_login_register = document.querySelector(".container_login-register");
const rear_box_login = document.querySelector(".rear_box-login");
const rear_box_register = document.querySelector(".rear_box-register");

//Define Functions
function register(){
    if (window.innerWidth > 850){
        form_register.style.display = "block";
        container_login_register.style.left = "410px";
        form_login.style.display = "none";
        rear_box_register.style.opacity = "0";
        rear_box_login.style.opacity = "1";
    }else{
        form_login.style.display = "none";
        form_register.style.display = "block";
        container_login_register.style.left = "0px";
        rear_box_register.style.display = "none";
        rear_box_login.style.display = "block";
        rear_box_login.style.opacity = "1";
    }
}

function login(){
    if (window.innerWidth > 850){
        form_login.style.display = "block"
        container_login_register.style.left = "10px";
        form_register.style.display = "none";
        rear_box_register.style.opacity = "1";
        rear_box_login.style.opacity = "0";
    }else{
        form_login.style.display = "block";
        container_login_register.style.left = "0px";
        form_register.style.display = "none";
        rear_box_register.style.display = "block";
        rear_box_login.style.display = "none";
    }
}

function widthPage(){
    if (window.innerWidth > 850){
        rear_box_login.style.display = "block";
        rear_box_register.style.display = "block";
        container_login_register.style.left = "10px";
    }else{
        rear_box_register.style.opacity = "1";
        rear_box_register.style.display = "block";
        rear_box_login.style.display = "none";
        form_login.style.display = "block";
        form_register.style.display = "none";
        container_login_register.style.left = "0px";
    }
}

widthPage();