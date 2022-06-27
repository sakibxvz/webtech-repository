<?php require( "header.php");?>
<?php require "validate.php";?>
    <div class="container">
        <div class="row">
            <!-- Hero Part start  -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 p-2">

                        <h2 class="text-center p-2">Registration</h2>

                        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

                        <?php echo implode(",", $user);?>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                                    <small class="text-danger"><?php $nameErr ?></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                    <small class="text-danger"><?php $emailErr ?></small>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                                    <small class="text-danger"><?php $usernameErr ?></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="password"
                                        placeholder="Password" name="password">
                                        <small class="text-danger"><?php $passwordErr ?></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="confirmpassword" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Confirmpassword"
                                        placeholder="Confirm password" name="confirmpassword">
                                        <small class="text-danger"><?php $confirmpasswordErr ?></small>
                                </div>
                            </div>

                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="Male" name="gender" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="Female" name="gender">
                                            <label class="form-check-label" for="gridRadios2">
                                                Female
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios3" value="Others" name="gender">
                                            <label class="form-check-label" for="gridRadios3">
                                                Others
                                            </label>
                                            <small class="text-danger ml-3"><?php $genderErr ?></small>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Date Of Birth</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
                                    <small class="text-danger"><?php $dateofbirthErr ?></small>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
        
                                    <button type="submit" class="btn btn-danger ml-3">Reset</button>
                                </div>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
            <!-- Hero Part end  -->
        </div>
    </div>

<?php require "footer.php";?>