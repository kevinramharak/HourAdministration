<?php
if(isset($_GET['from'])&&isset($_GET['until'])&&isset($_SESSION['employeeid']))
{
  require_once '../../../API/Registration_Holiday.class.php';

  $rh = new Registration_Holiday();

  $employeeid = $_SESSION['employeeid'];
  $from = $_GET['from'];
  $until = $_GET['until'];
  $rh->register($employeeid, $from, $until);

  header("Location: http://localhost/HourAdministration/Web/php/fellow-worker/");
} else {
  //header("Location: http://localhost/HourAdministration/Web/php/fellow-worker/vacation.php?err=somethingwentwrong");
}