<!DOCTYPE HTML>  
<html>
<body>
    <?php
    $currPass = "sakib@123";
    $newPass = $retypePass = "";
    $currPassErr = $newPassErr = $retypePassErr="";
  
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
    if (empty($_POST["cpass"])) 
    {
        $currPassErr = "Required";    
    }

    else
    {

     $currPass = $_POST["cpass"];    
   
    }

    if(empty($_POST["npass"]))
    {
        $newPasswordErr = "Password is required";
    }
    else
    {
        $newPassword = $_POST["npass"]; 

    if(($_POST["cpass"] == $_POST["npass"]))
    {
        $newPassErr ="Should not be same as current password";
    }
 }
 if(empty($_POST["rpass"]))
    {
        $retypePasswordErr = "required";
    }
    else
    {
        $retypePassword = $_POST["rpass"]; 

    if(($_POST["npass"] !== $_POST["rpass"]))
    {
        $retypePassErr ="Must match be matched with new Password";
    }

 }
}
    
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Current Password: 
  <input type="text" name="cpass" value="<?php echo $currPass;?>">
  <span> <?php echo $currPassErr;?></span>
  <br> <br>

   New Password: 
  <input type="password" name="npass" value="<?php echo $newPass;?>">
  <span> <?php echo $newPassErr;?></span>
  <br> <br>

  Retype New Password:
  <input type="password" name="rpass" value="<?php echo $retypePass;?>">
  <span> <?php echo $retypePassErr;?></span>
  <br> <br>
  <input type="submit" name="submit" value="Submit"> 
  </form>
  </body>
  </html>