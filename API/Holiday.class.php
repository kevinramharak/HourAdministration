<?php
// Database details
define('DB_IP', "localhost");
define('DB_NAME', "teun");
define('DB_USER', "root");
define('DB_PASS', "pass");
class Holiday extends PDO {
  private $PDO;

  public function __construct()
  {
    $this->PDO = new PDO("mysql:host=localhost;dbname=teun", DB_USER, DB_PASS);
  }

  public function register($date, $name){
    $this->PDO = $this->PDO->prepare("INSERT INTO holidays VALUES (null, :date, :name");
    $this->PDO->bindParam(':date', $date);
    $this->PDO->bindParam(':name', $name);
    $this->PDO->execute();
  }
}