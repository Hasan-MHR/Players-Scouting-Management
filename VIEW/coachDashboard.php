<?php
session_start();
if ($_SESSION['userRole']!="coach") {
        header("Location: ../view/login.php");
  
}
if(!isset($_SESSION['userRole']) || $_SESSION['userRole']!="coach"){
    header("Location: ../view/login.php");
    exit;
}
?>



  <?php include ("./components/loggedinNavbar.php"); ?>
  <?php include ("./components/coachHead.php"); ?>
  <?php include ("./components/sidebarCoach.php"); ?>







