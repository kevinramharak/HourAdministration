<?php
// Database details
define('DB_IP', "localhost");
define('DB_NAME', "teun");
define('DB_USER', "root");
define('DB_PASS', "pass");
class Registration_Illness extends PDO {
  private $PDO;

  public function __construct()
  {
    $this->PDO = new PDO("mysql:host=localhost;dbname=teun", DB_USER, DB_PASS);
  }

  public function register($employeeid, $time){
    $this->PDO = $this->PDO->prepare("INSERT INTO registration_illness VALUES (null, :employeeid, :startdate, null)");
    $this->PDO->bindParam(':employeeid', $employeeid);
    $datetime = date("Y-m-d").'T'.$time;
    $this->PDO->bindParam(':startdate', $datetime);
    $this->PDO->execute();
  }
}