<?php
    require_once "../../../API/index.php";
    $API = new Users();
    if($API->loginAccount($_POST['username'], $_POST['password'])) {
        header('Location: http://omfgdogs.com/');
        //header('Location: http://localhost/HourAdministration/Web/php/fellow-worker/home.php');
    } else {
        header('Location: http://localhost/HourAdministration/Web/php/log-in.php');
    }