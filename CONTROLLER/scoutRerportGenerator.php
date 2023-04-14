<?php
include ("../model/dbconfig.php");
session_start();
$playerName     = $_POST["playername"];
$reportTitle    = addslashes($_POST["reportTitle"]);
$report         = addslashes($_POST["report"]);
$scoutID        = $_SESSION["scoutID"];
$scoutName      = $_SESSION["scoutName"];


$sql = "INSERT INTO `scout_report`(`scoutID`, `scoutName`, `about`, `reportTitle`, `report`) VALUES ('$scoutID','$scoutName','$playerName','$reportTitle','$report')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Report submitted successfully";
    header("refresh:2;url=../view/scoutDashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




?>

<!-- $title  =    addslashes(trim($title)); -->