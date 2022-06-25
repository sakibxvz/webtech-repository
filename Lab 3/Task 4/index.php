<?php require("script.php") ?>
<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  
<?php  
// define variables to empty values  
$nameErr = $emailErr = $dateofbirthErr = $genderErr = $userNameErr = $passErr = $conPassErr=""; 

$name = $email = $dateofbirth = $gender = $username = $pass = $conPass= "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
      
    //Username Validation   
    if (empty($_POST["username"])) {  
            $userNameErr = "username is required";  
    } else {  
             $userNameTemp = input_data($_POST["username"]); 
            if (preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/',$userNameTemp)) {  
                $userName = $userNameTemp;
            } else{
				$userNameErr ="At least 2 word required";
			}
     } 

    //Password Validation   
    if (empty($_POST["password"])) {  
            $passErr = "password is required";  
    } else {  
            $passTemp =  input_data($_POST["password"]);
            if (preg_match('^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$',$passTemp)) {  
                $pass = $passTemp;
            } else{
				$passErr ="At least 2 word required";
			}
     }

    //Confirm Password Validation   
    if (empty($_POST["conpassword"])) {  
            $conPassErr = "Confirm password is required";  
    } elseif($_POST["password"] === $_POST["conpassword"]) {  
            $conPass = input_data($_POST["conpassword"]);
     } else{
		$conPassErr="password not match";
	 } 
      
      
    //Gender Validation  
    if (empty ($_POST["gender"])) {  
            $genderErr = "Gender is required";  
    } else {  
            $gender = input_data($_POST["gender"]);  
    }  

    //Date Of Birth Validation
    if (empty ($_POST["dateofbirth"])) {  
            $dateofbirthErr = "Date of birth is required";  
    } else {  
            $dateofbirth = input_data($_POST["dateofbirth"]);  
    } 





}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<h2>PHP Form</h2>  
<br><br>  
<form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    Name:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>  
    E-mail:   
    <input type="text" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>  
    User Name:   
    <input type="text" name="username">  
    <span class="error">* <?php echo $userNameErr; ?> </span>  
	<br><br> 
    Password:   
    <input type="text" name="password">  
    <span class="error">* <?php echo $passErr; ?> </span>  
    <br><br>  
    Confirm Password:   
    <input type="text" name="conpassword">  
    <span class="error">* <?php echo $conPassErr; ?> </span>  
    <br><br>  
    DATE OF BIRTH:
    <input type="date" name="dateofbirth" id="date" placeholder="dd-mm-yyyy" value="" min="1953-01-01" max="1998-12-31">
    <span class="error">* <?php echo $dateofbirthErr;  ?> </span>
    <br><br>
    Gender:  
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other"> Other  
    <span class="error">* <?php echo $genderErr; ?> </span>  
    <br><br> 
    
    <input type="submit" name="submit" value="Submit">                              
    <input type="button" onclick="myFunction()" value="Reset form">   
    <br><br>                             
</form>  

<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
  
</body>  
</html>  