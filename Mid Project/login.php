<?php include_once  'includes/dbh.inc.php'; 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        	<div class="col-sm-4 m-auto pt-5">
        	    <h4 class="p-3 text-center">Login to dashboard</h4>
                <?php
                    if (@$_GET['Error']== true) {   
                ?>
                <div class="alert-light text-danger text-center">
                    <?php echo $_GET['Error'] ;
                    ?>
                </div>
                <?php
                    }
                ?>
        	    <div class="card">
        	        <article class="card-body">
        	            <h4 class="card-title mb-4 mt-1">Sign in</h4>
        	            <form action="validation.php" method="post">
        	                <div class="form-group">
        	                    <label>Your Username</label>
        	                    <input name="username" class="form-control" placeholder="Username" type="username">
        	                </div> <!-- form-group// -->
        	                <div class="form-group">
        	                    <label>Your Password</label>
        	                    <input name="password" class="form-control" placeholder="******" type="text">
        	                </div> <!-- form-group// -->
        	                <div class="form-group">
        	                    <div class="checkbox">
        	                        <label> <input name="savepass" type="checkbox"> Save password </label>
        	                    </div> <!-- checkbox .// -->
        	                </div> <!-- form-group// -->
        	                <div class="form-group">
        	                    <button type="submit" name="login" class="btn btn-primary btn-block"> Login </button>
        	                </div> <!-- form-group// -->
        	            </form>
        	        </article>
        	    </div> <!-- card.// -->

        	</div> <!-- col.// -->
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>