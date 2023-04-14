<?php

session_start();
include ("../model/dbconfig.php");
if(!isset($_SESSION['userRole'])){
    header("Location: ../view/login.php");
    exit;
}
if ($_SESSION['userRole']=="club") {
    include ("./components/clubHead.php"); 
}
if ($_SESSION['userRole']=="coach") {
    include ("./components/coachHead.php"); 
}
if ($_SESSION['userRole']=="scout") {
    include ("./components/scoutHead.php"); 
}

include ("./components/loggedinNavbar.php"); 
include ("./components/sidebarClub.php"); 


$profile = $_GET['profile'];
$sql = "SELECT * FROM `club_info` WHERE club_name LIKE '%$profile%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div class='container-mod'>";
    echo "<div class='box1'>&nbsp;</div>";

    while($row = $result->fetch_assoc()) {
        echo "
        <div class='row'>
          <div class='col'>
          <div class='card' style='width: 40rem;'>
          <div class='card-body'>
            <h1 class='card-title'>".$row["club_name"]."</h1></br>
            <h5 class='card-subtitle mb-2 '>About →</br></br></br>".$row["club_Info"]."</h5></br></br></br>
            <h6 class='card-subtitle mb-2 text-muted'>Contact →".$row["club_email"]."</h6>
            
        ";
    }
} else {
    echo "<center> 
            0 results<br/> 
            <Label>No players found, database error? </Label><br/> 
            <a href='post.php' class='btn btn-primary'>Create</a>
        </center>";
}


?>
<h4> Players in the club</h4>
<?php
$sql = "SELECT * FROM `player_info` WHERE current_club LIKE '%$profile%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    echo '<div class="container">';
    echo "<div class='container'><div class='row'>";
    while($row = $result->fetch_assoc()) {
        echo "
        
        <div class='col'>
          <div class='card' style='width: 24rem;'>
          <div class='card-body'>
            <h4 class='card-title'>".$row["p_name"]."</h4>
            <h5 class='card-subtitle mb-2 text-muted'>Plays for →".$row["current_club"]."</h5>
            <h6 class='card-subtitle mb-2 text-muted'>Position →".$row["p_position"]."</h6>
            <a href='playerprofile.php?id=".$row["p_id"]."' class='card-link'>View Player Profile</a>
            <a href='clubprofile.php?profile=".$row["current_club"]."' class='card-link'>View Club Profile</a>
          </div>
          </div>
        
          
        ";
    }
} else {
    echo "<center> 
            0 results<br/> 
            <Label>No players found, database error? </Label><br/> 
            <a href='post.php' class='btn btn-primary'>Create</a>
        </center>";
}
?>
