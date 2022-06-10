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
$nameErr = $emailErr = $dateofbirthErr = $genderErr = $degreeErr = $bloodErr = "";  
$name = $email = $dateofbirth = $gender = $degree[] = $blood = "";  
  
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
      
      
    //Empty Field Validation  
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

    //Drgree validation
    if(isset($_POST["degree"])){    
        if(in_array("SSC", $_POST["degree"])){
           array_push($degree,"SSC");
        }
        if(in_array("HSC", $_POST["degree"])){
           array_push($degree,"HSC");
        }
        if(in_array("BSc", $_POST["degree"])){
           array_push($degree,"BSc");
        }
        if(in_array("MSc", $_POST["degree"])){
           array_push($degree,"MSc");
        }
    } elseif (sizeof($degree)<=1) {
        $degreeErr = "At least two degree required"; 
    }
    
    //Blood Group validation
    if (empty ($_POST["blood"])) {  
            $bloodErr = "Blood Group is required";  
    } else {  
            $blood = input_data($_POST["blood"]);  
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    Name:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>  
    E-mail:   
    <input type="text" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
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
    DEGREE:
    <input type="checkbox" id="SSC" name="degree[]" value="SSC">
        <label for="SSC">SSC</label>
    <input type="checkbox" id="HSC" name="degree[]" value="HSC">
        <label for="HSC">HSC</label>
    <input type="checkbox" id="BSc" name="degree[]" value="BSc">
        <label for="BSc">BSc</label>
    <input type="checkbox" id="MSc" name="degree[]" value="MSc">
        <label for="MSc">MSc</label>
    <span class="error">* <?php echo $degreeErr; ?> </span> 
    <br><br>
    BLOOD GROUP:
    <select name="blood">
        <option></option>
        <option name="blood" value="A+">A+</options>
        <option name="blood" value="A-">A-</options>
        <option name="blood" value="B+">B+</options>
        <option name="blood" value="B-">B-</options>
        <option name="blood" value="O+">O+</options>
        <option name="blood" value="O-">O-</options>
   </select>
    <span class="error">* <?php echo $bloodErr; ?> </span> 
    <br><br>
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form>  

  
</body>  
</html>  