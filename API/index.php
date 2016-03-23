<?php
    // Database details
    define(DB_IP, "localhost");
    define(DB_TABLE, "daanjans_ha");
    define(DB_USER, "daanjans_ha");
    define(DB_PASS, "adminadmin");

    // Require
    require_once "classes/API.php";

    if(!empty($_GET['action']) && !empty($_POST)) {
        $API = new API();
        $API->action($_GET['action']);
        $API->setVars($_POST);
    } else {
        // </3
        echo json_encode([
            "response" => "enter action"
        ]);
    }