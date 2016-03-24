<?php
// Database details
define('DB_IP', "localhost");
define('DB_NAME', "teun");
define('DB_USER', "root");
define('DB_PASS', "pass");
    class Users extends PDO{
        private $passwordHash;
        private $userID;
        private $PDO;
        function __construct()
        {
            $this->PDO = new PDO("mysql:host=localhost;dbname=teun", DB_USER, DB_PASS);
        }
        function loginAccount($empID, $pass)
        {
            $this->PDO = $this->PDO->prepare("SELECT * FROM Users WHERE EmployeeID = ?");
            $this->PDO->bindParam(1, $empID);
            $this->PDO->execute();
            if(password_verify($pass, $this->PDO->fetch(PDO::FETCH_ASSOC)['Password'])) {
                $_SESSION['employeeid'] = $empID;
                return true;
            } else {
                return false;
            }
        }
        function getFirstnameFromEmpID($empID) {
            $this->PDO = $this->PDO->prepare("SELECT firstname FROM Employees WHERE EmployeeID = ?");
            $this->PDO->bindParam(1, $empID);
            $this->PDO->execute();
            return $this->PDO->fetch(PDO::FETCH_ASSOC)['firstname'];
        }
        function getLastnameFromEmpID($empID) {
            $this->PDO = $this->PDO->prepare("SELECT lastname FROM Employees WHERE EmployeeID = ?");
            $this->PDO->bindParam(1, $empID);
            $this->PDO->execute();
            return $this->PDO->fetch(PDO::FETCH_ASSOC)['lastname'];
        }
        function __destruct()
        {
            //$this->PDO->close();
        }
    }