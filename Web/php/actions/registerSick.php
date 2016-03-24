<?php
session_start();
if(isset($_GET['time']) && isset($_SESSION['employeeid'])){
  require_once '../../../API/Registration_Illness.class.php';

  $time = $_GET['time'];
  $id = $_SESSION['employeeid'];

  $ri = new Registration_Illness();

  $ri->register($id, $time);

  header("Location: http://localhost/HourAdministration/Web/php/fellow-worker/home.php");
} else {
  header("Location: http://localhost/HourAdministration/Web/php/fellow-worker/sick.php");
}