<?php
    require_once "../../../API/index.php";
    $s = new Submits();
    $u = new Users();
    //print_r($s->getSubmits()[0][EmployeeID]);
    //print_r($u->getFirstnameFromEmpID(1));
    echo $u->getFirstnameFromEmpID($s->getSubmits()[0][EmployeeID]);