<?php
session_start();
    require_once "../../../API/Users.class.php";
    $API = new Users();
    if($API->loginAccount($_POST['username'], $_POST['password'])) {
        header('Location: http://localhost/HourAdministration/Web/php/fellow-worker/home.php');
    } else {
        header('Location: http://localhost/HourAdministration/Web/php/log-in.php');
    }