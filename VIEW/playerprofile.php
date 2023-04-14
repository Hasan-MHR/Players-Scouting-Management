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


$id = $_GET['id'];
$sql = "SELECT * FROM `player_info` WHERE p_id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div class='container-mod'>";
    echo "<div class='box1'></div>";
    echo "<div class='box2'>";
    echo '<div class="container">';
    while($row = $result->fetch_assoc()) {
        echo "
        <div class='row'>
          <div class='col'>

          <div class='card' style='width: 32rem;'>
          <div class='card-body'>
            <h4 class='card-title'>".$row["p_name"]."</h4>
            <h5 class='card-subtitle mb-2 text-muted'>Plays for →".$row["current_club"]."</h5>
            <h6 class='card-subtitle mb-2 text-muted'>Position →".$row["p_position"]."</h6>
            <a href='playerprofile.php?id=".$row["p_id"]."' class='card-link'>View Player Profile</a>
            <a href='#' class='card-link'>View Club Profile</a>
          </div>
          </div>
            <p> Physical Attributes
          <table class='table'>
            <thead>
                <tr>
                <th scope='col'>Attribute</th>
                <th scope='col'>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Pace</td>
                <td>".$row["p_pace"]."</td>
                </tr>
                <tr>
                <td>Dribble</td>
                <td>".$row["p_dribble"]."</td>
                </tr>
                <tr>
                <td>Shooting</td>
                <td>".$row["p_shooting"]."</td>
                </tr>
                <tr>
                <td>Defense</td>
                <td>".$row["p_defense"]."</td>
                </tr>
                <tr>
                <td>Passing</td>
                <td>".$row["p_passing"]."</td>
                </tr>
                <tr>
                <td>Physique</td>
                <td>".$row["p_physic"]."</td>
                </tr>
                </tbody>
        </table>

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