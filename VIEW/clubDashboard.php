<?php
session_start();
if ($_SESSION['userRole']!="club") {
        header("Location: ../view/login.php");
  
}
if(!isset($_SESSION['userRole']) || $_SESSION['userRole']!="club"){
    header("Location: ../view/login.php");
    exit;
}
?>



  <?php include ("./components/loggedinNavbar.php"); ?>
  <?php include ("./components/clubHead.php"); ?>
  <?php include ("./components/sidebarClub.php"); ?>







