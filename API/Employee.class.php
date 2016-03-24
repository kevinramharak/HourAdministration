<?php
define('DB_IP', "localhost");
define('DB_NAME', "teun");
define('DB_USER', "root");
define('DB_PASS', "pass");

class Employee extends PDO {
  private $PDO;

  public function __construct()
  {
    $this->PDO = new PDO("mysql:host=localhost;dbname=teun", DB_USER, DB_PASS);
  }

  public function register($firstname, $prefix, $lastname, $birthdate, $sex, $employeeid, $parttimefactor){
    $this->PDO = $this->PDO->prepare("INSERT INTO employees VALUES (:firstname, :prefix, :lastname, :birthdate, :sex, :employeeid, :parttimefactor)");
    $this->PDO->bindParam(':firstname',$firstname);
    $this->PDO->bindParam(':prefix',$prefix);
    $this->PDO->bindParam(':lastname',$lastname);
    $this->PDO->bindParam(':birthdate',$birthdate);
    $this->PDO->bindParam(':sex',$sex);
    $this->PDO->bindParam(':employeeid',$employeeid);
    $this->PDO->bindParam(':parttimefactor',$parttimefactor);
    $this->PDO->execute();

    $password = password_hash('teun', PASSWORD_DEFAULT);

    $this->PDO = $this->PDO->prepare("INSERT INTO users VALUES (null, :employeeid, :pass, '0')");
    $this->PDO->bindParam(':employeeid',$employeeid);
    $this->PDO->bindParam(':pass',$password);
    $this->PDO->execute();
  }
}