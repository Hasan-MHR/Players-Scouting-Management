<html>
<?php include("./components/head.php") ?>
<body>
            <!-- Navbar -->
            <?php include("./components/navbar.php") ?>
            <!-- Navbar -->

<div class="container">
<center>
<div class="card" style="width: 68rem;">
  <div class="card-body">
    <h4 class="card-title">Sunrise Scouting</h4>
    <h6 class="card-subtitle mb-2 text-muted">Scouting on Football 24/7</h6>
    <p class="card-text">Our scouts are always active on collecting the latest news on football to deliever.</p>
  </div>
</div>
</center>

<h2> Popular Clubs </h2>
        <div class="row">

            <?php
            include ("../model/dbconfig.php");
            $sql = "SELECT * FROM club_info ORDER BY RAND() LIMIT 4";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo " 
                    <div class='col'>
                    <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                      <h5 class='card-title'>".$row['club_name']."</h5>
                      <p class='card-text'>".$row['club_Info']."</p>
                      <a href='clubprofile.php?profile=".$row['club_name']."' class='btn btn-primary'>View Club</a>
                    </div>
                    </div>
                    </div>
                    ";
                }
            }
            ?>


            </div>

           
        

<h2> Popular Players </h2>
<div class="row">


<?php
            include ("../model/dbconfig.php");
            $sql = "SELECT * FROM player_info ORDER BY RAND() LIMIT 6";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo " 
                    <div class='col'>
                    <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                      <h5 class='card-title'>".$row['p_name']."</h5>
                      <p class='card-text'>Plays for → ".$row['current_club']."</p>
                      <p class='card-text'>Position in the field → ".$row['p_position']."'</p>

                    </div>
                    </div>
                    </div>
                    ";
                }
            }
            ?>

        

        </div>    
        
<h2> Popular News </h2>
<div class="row">



<?php
            include ("../model/dbconfig.php");
            $sql = "SELECT * FROM club_info ORDER BY RAND() LIMIT 4";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo " 
                    <div class='col'>
                    <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                      <h5 class='card-title'>".$row['club_name']."</h5>
                      <p class='card-text'>".$row['club_Info']."</p>
                      <a href='clubprofile.php?profile=".$row['club_name']."' class='btn btn-primary'>View Club</a>
                    </div>
                    </div>
                    </div>
                    ";
                }
            }
            ?>


</div>

        


        


</body>
</html>
