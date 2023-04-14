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
                            <h5 class="card-header">Login</h5>
                            <div class="card-body">
                            <form action="../controller/login.php" method="post">
                                <div class="mb-3">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="userRole" id="flexRadioDefault1" value="club">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Club
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="userRole" id="flexRadioDefault2" value="coach">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Coach
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="userRole" id="flexRadioDefault3" value="scout">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Scout
                                    </label>
                                    </div>

                                </div>
                            <form action="login.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                </div></br>
                                <button type="submit" class="btn btn-primary btnAllign">Submit</button>
                                <p class="authAlter"> No account? <a href="register.php">Register Here</a></p>
                            </form>


                            </div>
                            </div>

                        </div>
                    </div>

