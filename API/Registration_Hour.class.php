<?php
// Database details
define('DB_IP', "localhost");
define('DB_NAME', "teun");
define('DB_USER', "root");
define('DB_PASS', "pass");
class Registration_Hours extends PDO {
  private $PDO;

  public function __construct()
  {
    $this->PDO = new PDO("mysql:host=localhost;dbname=teun", DB_USER, DB_PASS);
  }

  public function register($employeeid, $hours){
    $this->PDO = $this->PDO->prepare("INSERT INTO registration_hours VALUES (null, :employeeid, :date, :hours, :projectid)");

    $date = date('Y-m-d');
    $id = '11111111';

    $this->PDO->bindParam(':employeeid',$employeeid);
    $this->PDO->bindParam(':date',$date);
    $this->PDO->bindParam(':hours',$hours);
    $this->PDO->bindParam(':projectid',$id);

    $this->PDO->execute();
  }
}