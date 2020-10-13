<?php


function checkLogin(){
    return isset($_SESSION['current_user']);
}

function redirect($act) {
    header("location: ?act=$act");
    die();
}

