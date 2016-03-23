<?php
    if(!empty($_GET['action'])) {
        
    } else {
        echo json_encode([
            "response" => "enter action"
        ]);
    }