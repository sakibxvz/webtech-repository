<?php require "header.php";?>

<?php 


?>

        <div class="container">
        <div class="row">
            <!-- Hero Part start  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 p-2">

                        <h2 class="text-center p-2">Login</h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <small class="text-danger ml-3"> Invalid email</small>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <small class="text-danger ml-3"> Invalid email</small>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 ml-auto">Submit</button>

                            <button type="submit" class="btn btn-outline-danger btn-sm mt-2 ml-5"><a href="forgetpassword.html" class="text-black">Forget Password?</a></button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
            <!-- Hero Part end  -->
        </div>
    </div>
<?php require "footer.php";?>