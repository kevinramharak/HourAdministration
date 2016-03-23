<?php
    require_once "../../../API/index.php";
    $API = new Users();
    if($API->loginAccount(1, $_POST['password'])) {
        header('Location: http://localhost/HourAdministration/Web/php/fellow-worker/home.php');
    } else {
        header('Location: http://pornhub.com');
    }