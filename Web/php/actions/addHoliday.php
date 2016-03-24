<?php
session_start();
if(isset($_GET['date']) && isset($_GET['name-holiday'])){

  require_once "../../../API/Holiday.class.php";

  $hol = new Holiday();

  $date = $_GET['date'];
  $name = $_GET['name-holiday'];

  $hol->register($date, $name);

  header("Location: http://localhost/HourAdministration/Web/php/administrative-assistent/home.php");
} else {
  header("Location: http://localhost/HourAdministration/Web/php/administrative-assistent/holidays.php");
}