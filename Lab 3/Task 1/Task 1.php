<!DOCTYPE HTML>  
<html>
<body>
    <?php
    $name = $password = "";
    $nameErr = $passwordErr = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
    if (empty($_POST["name"])) 
    {
        $nameErr = "Name is required";    
    }

    else
    {
     $name = $_POST["name"];    
   

    if(str_word_count($_POST["name"])<2)
        {
          $nameErr = "Please type at least two input";
        }

        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
    {
      $nameErr = "Only letters and white space allowed";
    }
  }

    //Pass
    if(empty($_POST["pass"]))
    {
        $passwordErr = "Password is required";
    }
    else
    {
        $password = $_POST["pass"]; 

    if(strlen($_POST["pass"]<8))
    {
        $passwordErr = "Must not be less than 8 characters";
    }
 }
}
    
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name: 
  <input type="text" name="name" value="<?php echo $name;?>">
  <span> <?php echo $nameErr;?></span>
  <br> <br>

   Password: 
  <input type="password" name="pass" value="<?php echo $password;?>">
  <span> <?php echo $passwordErr;?></span>
  <br> <br>

  <input type="submit" name="submit" value="Submit"> 
  </form>

  </body>
  </html>