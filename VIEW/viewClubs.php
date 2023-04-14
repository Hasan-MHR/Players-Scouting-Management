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

?>


<div class="container-mod">
  <div class="box1">
    
  </div>
    


<?php
        $sql = "SELECT * FROM `club_info`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            echo "<div class='box2'>";
            echo '<div class="container"> <div class="row">';
            while($row = $result->fetch_assoc()) {
                echo "
                
                  <div class='col'>

                  <div class='card' style='width: 24rem;'>
                  <div class='card-body'>
                    <h4 class='card-title'>".$row["club_name"]."</h4>
                    <h5 class='card-subtitle mb-2'>About →".$row["club_Info"]."</h5>
                    <h6 class='card-subtitle mb-2 text-muted'>".$row["club_email"]."</h6>
                    <a href='clubprofile.php?profile=".$row["club_name"]."'>View Club profile</a>
                  </div>
                  </div>
                  </div>
                ";
            }
        } else {
            echo "<center> 
                    0 results<br/> 
                    <Label>No players found, database error? </Label><br/> 
                    <a href='post.php' class='btn btn-primary'>Create</a>
                </center>
                
                
                "
                ;
        }

?> 
  </div>
</div>
        </div>
      </div>
        <br/>
<!-- //posts are here// -->


