<?php
    // Database details
<<<<<<< Updated upstream
    define(DB_IP, "localhost");
    define(DB_TABLE, "daanjans_ha");
    define(DB_USER, "daanjans_ha");
    define(DB_PASS, "adminadmin");
=======
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
            $this->PDO = $this->PDO->prepare("SELECT * FROM Users WHERE EmployeeID = 1");
            $this->PDO->bindParam(1, $empID);
            $this->PDO->execute();
            print_r($this->PDO->fetchAll(PDO::FETCH_ASSOC));
        }
        function __destruct()
        {
            //$this->PDO->close();
        }
    }
$u = new Users();
//echo password_hash("daan", PASSWORD_DEFAULT);
if($u->loginAccount(1, "daan")) {
    echo '<3';
}
>>>>>>> Stashed changes
