<?php
require_once "API.php";
class Employees extends API
{
    function registerAccount($id, $firstname, $prefix, $lastname, $birthdate, $sex, $employeeID, $parttimeFactor)
    {
        $SQL = "INSERT INTO employees () VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        $this->PDO = $this->PDO->prepare($SQL);
        $this->PDO->bindParam(1, $id);
        $this->PDO->bindParam(2, $firstname);
        $this->PDO->bindParam(3, $prefix);
        $this->PDO->bindParam(4, $lastname);
        $this->PDO->bindParam(5, $birthdate);
        $this->PDO->bindParam(6, $sex);
        $this->PDO->bindParam(7, $employeeID);
        $this->PDO->bindParam(8, $parttimeFactor);
        $this->PDO->execute();
        return $this->PDO->fetchAll(PDO::FETCH_ASSOC);
    }
    function loginAccount($employeeID, $password) {
        $SQL = "SELECT password FROM employees WHERE employeeID = ?";
        $this->PDO = $this->PDO->prepare($SQL);
        $this->PDO->bindParam(1, $employeeID);
        $this->passwordHash = $this->PDO->fetch();
        if(password_verify($password, $this->passwordHash)) {
            return true;
        } else {
            return false;
        }
    }
}