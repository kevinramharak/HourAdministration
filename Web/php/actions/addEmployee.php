<?php
session_start();
if(isset($_GET['']) && isset($_GET[''])){


  header("Location: http://localhost/HourAdministration/Web/php/administrative-assistent/home.php");
} else {
  header("Location: http://localhost/HourAdministration/Web/php/administrative-assistent/addFellowWorker.php");
}