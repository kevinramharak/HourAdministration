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
    class Submits {
        function __construct()
        {
            $this->PDO = new PDO("mysql:host=localhost;dbname=teun", DB_USER, DB_PASS);
        }
        function submitVacation($from, $to) {
            $this->PDO = $this->PDO->prepare("");
            $this->PDO->bindParam(1, $to);
            $this->PDO->execute();
            if(password_verify($from, $this->PDO->fetch(PDO::FETCH_ASSOC)['Password'])) {
                return true;
            } else {
                return false;
            }
        }
        function getSubmits() {
            $this->PDO = $this->PDO->prepare("SELECT * FROM Registration_Holidays WHERE Status = 'pending'");
            $this->PDO->execute();
            return $this->PDO->fetchAll(PDO::FETCH_ASSOC);
        }
        function getStartDateFromEmpID($empID) {
            $this->PDO = $this->PDO->prepare("SELECT StartDate FROM Registration_Holidays WHERE EmployeeID = ?");
            $this->PDO->bindParam(1, $empID);
            $this->PDO->execute();
            return $this->PDO->fetch(PDO::FETCH_ASSOC)['StartDate'];
        }
        function getEndDateFromEmpID($empID) {
            $this->PDO = $this->PDO->prepare("SELECT EndDate FROM Registration_Holidays WHERE EmployeeID = ?");
            $this->PDO->bindParam(1, $empID);
            $this->PDO->execute();
            return $this->PDO->fetch(PDO::FETCH_ASSOC)['EndDate'];
        }
    }
$u = new Users();
//echo password_hash("daan", PASSWORD_DEFAULT);