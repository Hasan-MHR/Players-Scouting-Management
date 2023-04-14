  <?php 
  session_start();
  if ($_SESSION['userRole']!="coach") {
          header("Location: ../view/index.php");
    
  }
  if(!isset($_SESSION['userRole']) || $_SESSION['userRole']!="coach"){
      header("Location: ../view/index.php");
      exit;
  }
  include ("./components/loggedinNavbar.php"); 
  include ("./components/coachHead.php"); 
  include ("./components/sidebarCoach.php"); 
  ?>


    <div class="container-mod">
  <div class="box1"></div>
  <div class="box2">
  <div class="row">  
    
      <?php
      include("../model/dbconfig.php");
      $sql = "SELECT * FROM scout_report";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<div class='col'>";  
            echo "<div class='card'>
              <div class='card-body'>
                <h5 class='card-title'>".$row['reportTitle']."</h5>
                <p class='card-text'>".$row['report']."</p>
              </div>
            </div>
            </div>";
          }
      } else {
          echo "0 results";
      }
      ?>
  </div>