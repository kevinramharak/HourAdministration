<?php
// Database details
define('DB_IP', "localhost");
define('DB_NAME', "teun");
define('DB_USER', "root");
define('DB_PASS', "pass");
class Registration_Holiday extends PDO {
  private $PDO;

  public function __construct()
  {
    $this->PDO = new PDO("mysql:host=localhost;dbname=teun", DB_USER, DB_PASS);
  }

  public function register($employeeid, $startdate, $enddate){
    $SQL = "INSERT INTO registration_holidays VALUES (null, :employeeid, :startdate, :enddate, :status, null)";
    $status = 'pending';

    $this->PDO = $this->PDO->prepare($SQL);
    $this->PDO->bindParam(':employeeid', $employeeid);
    $this->PDO->bindParam(':startdate', $startdate);
    $this->PDO->bindParam(':enddate', $enddate);
    $this->PDO->bindParam(':status', $status);
    $this->PDO->execute();
  }
}