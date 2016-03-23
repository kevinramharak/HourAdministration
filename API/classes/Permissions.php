<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/3/16
 * Time: 1:19 PM
 */
class Permissions extends API
{
    // Verkrijgt permissie
    function getPermission($employeeID) {
        $SQL = "SELECT permission FROM employees WHERE employeeID = ?";
        $this->setPDO($this->getPDO()->prepare($SQL));
        $this->getPDO()->bindParam(1, $employeeID);
        $this->getPDO()->execute();
        return $this->getPDO()->fetch(PDO::FETCH_ASSOC)['permission'];
    }
    // Checkt of de user de permission heeft
    function checkPermission($employeeID, $needed) {
        if($this->getPermission($employeeID) == $needed) {
            return true;
        } else {
            return false;
        }
    }
}