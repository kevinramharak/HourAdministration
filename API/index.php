<?php
    // Database details
    define('DB_IP', "localhost");
    define('DB_NAME', "teun");
    define('DB_USER', "root");
    define('DB_PASS', "");
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
                return true;
            } else {
                return false;
            }
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
            this->PDO = $this->PDO->prepare("");
            $this->PDO->bindParam(1, $empID);
            $this->PDO->execute();
            if(password_verify($pass, $this->PDO->fetch(PDO::FETCH_ASSOC)['Password'])) {
                return true;
            } else {
                return false;
            }
        }
    }
$u = new Users();
//echo password_hash("daan", PASSWORD_DEFAULT);