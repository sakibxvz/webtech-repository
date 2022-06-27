<?php 
 $name = $email = $username = $password = $gender = $dateofbirth = "";

 $nameErr = $emailErr = $usernameErr = $passwordErr = $confirmpasswordErr = $genderErr = $dateofbirthErr = "";

 //Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $nameTemp = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            } else{
                $name = $nameTemp;
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

