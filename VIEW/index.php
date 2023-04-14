<!----- Router setup for invalid access protection  ----- >

<?php
session_start();
if ($_SESSION['userRole']=="scout") {
        header("Location: ../view/scoutDashboard.php");
}
if(!isset($_SESSION['userRole']) || $_SESSION['userRole']=="scout"){
    header("Location: ../view/scoutDashboard.php");
    exit;
}

if ($_SESSION['userRole']=="coach") {
    header("Location: ../view/coachDashboard.php");
}
if(!isset($_SESSION['userRole']) || $_SESSION['userRole']=="coach"){
header("Location: ../view/coachDashboard.php");
exit;
}

if ($_SESSION['userRole']=="club") {
    header("Location: ../view/clubDashboard.php");
}
if(!isset($_SESSION['userRole']) || $_SESSION['userRole']=="club"){
header("Location: ../view/clubDashboard.php");
exit;
}

?>