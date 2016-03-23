<?php
require_once "API.php";
class Employees extends API
{
  function createEmployee($firstname, $prefix, $lastname, $birthdate, $sex, $employeeid, $parttimefactor) {
    $SQL_employee = "INSERT INTO employee VALUES (:firstname, :prefix, :lastname, :birthdate, :sex, :employeeid, :parttimefactor)";

    $SQL_user = "INSERT INTO users VALUES (:employeeid, :password, :permission)";
  }
  /*
  function loginAccount($employeeID, $password) {
      $SQL = "SELECT password FROM users WHERE employeeID = ?";
      $this->setPDO($this->getPDO()->prepare($SQL));
      $this->getPDO()->bindParam(1, $employeeID);
      $this->setPasswordHash($this->getPDO->fetch());
      if(password_verify($password, $this->getPasswordHash())) {
          return true;
      } else {
          return false;
      }
  }
  */
}