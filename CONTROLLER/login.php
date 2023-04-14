<?php
include("../model/dbconfig.php");
session_start();
if (!isset($_SESSION['userRole']) || $_SESSION['userRole']=="scout") {
        header("Location: ../view/scoutDashboard.php");
}
if (!isset($_SESSION['userRole']) || $_SESSION['userRole']=="coach") {
    header("Location: ../view/coachDashboard.php");
}
if (!isset($_SESSION['userRole']) || $_SESSION['userRole']=="club") {
    header("Location: ../view/clubDashboard.php");
}

$userRole = $_POST["userRole"];
$email    = $_POST["email"];
$password = $_POST["password"];

#$sql1 = "SELECT * FROM scout_info WHERE email = '$email' AND password = '$password'";
#$resultForScout = mysqli_query($conn, $sql1);
#$sql2 = "SELECT * FROM coach_info WHERE email = '$email' AND password = '$password'";
#$resultForCoach = mysqli_query($conn, $sql2);
#$sql3 = "SELECT * FROM club_info WHERE email = '$email' AND password = '$password'";
#$resultForClub = mysqli_query($conn, $sql3);

if ($userRole == "scout") {
    $sql1 = "SELECT * FROM scout_info WHERE email = '$email' AND password = '$password'";
    $resultForScout = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($resultForScout) > 0) {

        $row = $resultForScout->fetch_assoc();
        $_SESSION["scoutID"] = $row["scout_id"];
        $_SESSION["scoutName"] = $row["name"];
        $_SESSION["userRole"] = "scout";
        $_SESSION["email"] = $row["email"];
        header("Location: ../view/scoutDashboard.php");
    } 
    else {
        echo "Invalid Credentials";
        header("refresh:2;url=../view/login.php");
    }
}
if ($userRole == "coach") {
    $sql2 = "SELECT * FROM coach_info WHERE coach_email = '$email' AND coach_password = '$password'";
    $resultForCoach = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($resultForCoach) > 0) {

        $row = $resultForCoach->fetch_assoc();
        $_SESSION["coachID"] = $row["coach_id"];
        $_SESSION["coachName"] = $row["coach_name"];
        $_SESSION["userRole"] = "coach";
        $_SESSION["email"] = $row["coach_email"];
        header("Location: ../view/coachDashboard.php");
    } 
    else {
        echo "Invalid Credentials";
        header("refresh:2;url=../view/login.php");
    }
}
if ($userRole == "club") {
    $sql3 = "SELECT * FROM club_info WHERE club_email = '$email' AND club_password = '$password'";
    $resultForClub = mysqli_query($conn, $sql3);
    if (mysqli_num_rows($resultForClub) > 0) {

        $row = $resultForClub->fetch_assoc();
        $_SESSION["clubID"] = $row["club_id"];
        $_SESSION["clubName"] = $row["club_name"];
        $_SESSION["userRole"] = "club";
        $_SESSION["email"] = $row["club_email"];
        echo $_SESSION["clubID"];
        #header("Location: ../view/clubDashboard.php");
    } 
    else {
        echo "Invalid Credentials";
        header("refresh:2;url=../view/login.php");
    }
}
else{
    echo "Invalid Credentials. Did you chose a role?";
    header("refresh:2;url=../view/login.php");
}




?>