<?php
    require_once "../../../API/index.php";
    $API = new Users();
    if($API->loginAccount($_POST['username'], $_POST['password'])) {
        session_start();
        $_SESSION['employeeid'] = $_POST['username'];
        header('Location: http://localhost/HourAdministration/Web/php/fellow-worker/home.php');
    } else {
        header('Location: http://localhost/HourAdministration/Web/php/log-in.php');
    }