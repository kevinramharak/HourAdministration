<?php
session_start();
if(isset($_GET['first-name']) && isset($_GET['prefix'])&& isset($_GET['last-name'])&& isset($_GET['date-of-birth'])&& isset($_GET['sex'])&& isset($_GET['employee-number'])&& isset($_GET['factor-time'])){

  require_once '../../../API/Employee.class.php';

  $emp = new Employee();

  $firstname = $_GET['first-name'];
  $prefix = $_GET['prefix'];
  $lastname = $_GET['last-name'];
  $birthdate= $_GET['date-of-birth'];
  $sex = $_GET['sex'];
  $employeeid = $_GET['employee-number'];
  $parttimefactor = $_GET['factor-time'];

  $emp->register($firstname, $prefix, $lastname, $birthdate, $sex, $employeeid, $parttimefactor);

  header("Location: http://localhost/HourAdministration/Web/php/administrative-assistent/home.php");
} else {
  header("Location: http://localhost/HourAdministration/Web/php/administrative-assistent/addFellowWorker.php");
}