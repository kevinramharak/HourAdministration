<?php
require_once "API.php";
class Employees extends API
{
    function registerAccount($id, $firstname, $prefix, $lastname, $birthdate, $sex, $employeeID, $parttimeFactor)
    {
        $SQL = "INSERT INTO employees () VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        $this->setPDO($this->getPDO->prepare($SQL));
        $this->getPDO->bindParam(1, $id);
        $this->getPDO->bindParam(2, $firstname);
        $this->getPDO->bindParam(3, $prefix);
        $this->getPDO->bindParam(4, $lastname);
        $this->getPDO->bindParam(5, $birthdate);
        $this->getPDO->bindParam(6, $sex);
        $this->getPDO->bindParam(7, $employeeID);
        $this->getPDO->bindParam(8, $parttimeFactor);
        $this->getPDO->execute();
        return $this->getPDO->fetchAll(PDO::FETCH_ASSOC);
    }
    function loginAccount($employeeID, $password) {
        $SQL = "SELECT password FROM employees WHERE employeeID = ?";
        $this->setPDO($this->getPDO()->prepare($SQL));
        $this->getPDO()->bindParam(1, $employeeID);
        $this->setPasswordHash($this->getPDO->fetch());
        if(password_verify($password, $this->getPasswordHash())) {
            return true;
        } else {
            return false;
        }
    }
}