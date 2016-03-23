<?php
class Registration_Holiday extends PDO {
  private $PDO;

  public function __construct()
  {
    $this->PDO = new PDO("mysql:host=localhost;dbname=teun", DB_USER, DB_PASS);
  }

  public function register($employeeid, $startdate, $enddate){
    $SQL = "INSERT INTO registration_holiday VALUES (null, :employeeid, :startdate, :enddate, :status, null)";
    $status = 0;

    $this->PDO = $this->PDO->prepare($SQL);
    $this->PDO->bindParam(':employeeid', $employeeid);
    $this->PDO->bindParam(':startdate', $startdate);
    $this->PDO->bindParam(':enddate', $employeeid);
    $this->PDO->bindParam(':status', $status);
  }
}