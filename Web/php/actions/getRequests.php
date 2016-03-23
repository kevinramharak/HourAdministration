<?php
    require_once "../../../API/index.php";
    $s = new Submits();
    $u = new Users();
    print_r($s->getSubmits());
    print_r($u->getFirstnameFromEmpID(1));