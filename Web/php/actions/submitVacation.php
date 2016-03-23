<?php
    require_once "../../../API/index.php";
    if(!empty($_POST['from']) && !empty($_POST['to'])) {
        $s = new Submits();
        $s->submitVacation($_POST['from'], $_POST['to']);
    }
