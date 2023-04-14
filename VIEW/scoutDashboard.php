<?php
session_start();
if ($_SESSION['userRole']!="scout") {
        header("Location: ../view/login.php");
  
}
if(!isset($_SESSION['userRole']) || $_SESSION['userRole']!="scout"){
    header("Location: ../view/login.php");
    exit;
}
?>

  <?php include ("./components/loggedinNavbar.php"); ?>
  <?php include ("./components/scoutHead.php"); ?>
  <?php include ("./components/sidebarScout.php"); ?>







