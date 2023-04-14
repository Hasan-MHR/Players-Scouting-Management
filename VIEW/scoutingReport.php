  <?php 
  session_start();
  if ($_SESSION['userRole']!="scout") {
          header("Location: ../view/index.php");
    
  }
  if(!isset($_SESSION['userRole']) || $_SESSION['userRole']!="scout"){
      header("Location: ../view/index.php");
      exit;
  }
  include ("./components/loggedinNavbar.php"); 
  include ("./components/scoutHead.php"); 
  include ("./components/sidebarScout.php"); 
  ?>

  <div class="container">
  <div class="row">
    <div class="col sm-3">
      <!-- kept empty for design purpose -->
    </div>
    <div class="col-9">
      
    <div class="card">
      <div class="card-header">
        Generate Report
      </div>
      <div class="card-body">
        <form action="../controller/scoutRerportGenerator.php" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">About [Players Name, Clubs]</label>
    <input type="text" name="playername" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Report Title</label>
    <input type="text" name="reportTitle" class="form-control" id="exampleInputEmail1"/>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Report description</label>
    <textarea name="report" class="form-control" id="exampleInputEmail1"> </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

        </form>
      </div>
    </div>

    </div>

  </div>
</div>

    <!--
  <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
-->
