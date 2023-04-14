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

                            <form action="completeSignup.php" method="post">
                                <div class="mb-3">
                                    <div class="form-label">
                                        You can only sign up as a Club representative
                                    </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn btn-primary btnAllign">Submit</button>
                                <p class="authAlter"> Have Account? <a href="login.php">Login</a></p>
                            </form>


                            </div>
                            </div>

                        </div>
                    </div>

