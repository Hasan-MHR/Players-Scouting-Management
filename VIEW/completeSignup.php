<?php
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ($password!=$cpassword){
    echo "Passwords do not match";
    header( "refresh:2;url=../view/register.php" );
}
?>

<html>
    
    <?php include("./components/head.php") ?>
    
            <!-- Navbar -->
            <?php include("./components/navbar.php") ?>
            <!-- Navbar -->


            <body>
                <div class="container">
                    <div class="row">
                        <div class="col">
                </br>
                        <div class="cardMod">
                            <h5 class="card-header">Register</h5>
                            <div class="card-body">

                            <form action="../controller/signup.php" method="post">
                                <div class="mb-3">
                                    <div class="form-label">
                                        Fill up the necessary informations to sign up
                                    </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Club Name</label>
                                    <input type="text" name="clubName" class="form-control"  >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tell us about your club</label>
                                    <textarea type="text" name="clubInfo" class="form-control" ></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" name="email" class="form-label">Email</label>
                                    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" id="exampleInputPassword1">
                                </div>

                                <button type="submit" class="btn btn-primary btnAllign">Submit</button>
                                <p class="authAlter"> Have Account? <a href="login.php">Login</a></p>
                            </form>


                            </div>
                            </div>

                        </div>
                    </div>

