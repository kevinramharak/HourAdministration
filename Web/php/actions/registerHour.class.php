<?php
session_start();
if(isset($_GET['uren']) && isset($_SESSION['employeeid'])){
  require_once '../../../API/Registration_Hour.class.php';

  $hours = $_GET['uren'];
  $id = $_SESSION['employeeid'];

  $rh = new Registration_Hours();

  $rh->register($id, $hours);

  header("Location: http://localhost/HourAdministration/Web/php/fellow-worker/home.php");
} else {
  header("Location: http://localhost/HourAdministration/Web/php/fellow-worker/hours.php");
}