<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a1f8;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
       
    </style>
</head>
<body>

<?php

$fnameErr=$lnameErr=$emailErr=$phoneErr=$genderErr=$passwErr=$cpasswErr="";
$fname=$lname=$email=$phone=$gender=$passw=$cpassw="";
$registrationSuccess = false; 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$passw=$_POST["password"];
$cpassw=$_POST["cpassword"];

if ($fname === "") 
{
$fnameErr = "Fisrt Name required";
} 
else if (!preg_match("/^[A-Za-z]+$/", $fname)) 
{
$fnameErr = "Only letters are allowed";
}

if ($lname === "") 
{
$lnameErr = "Last Name required";
} 
else if (!preg_match("/^[A-Za-z\s\-']+$/", $lname)) 
{
$lnameErr = "Only letters are allowed";
}

if ($email === "") 
{
$emailErr = "Email required";
} 
else if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email)) 
{
$emailErr = "Enter Valid Email";
}

if ($phone === "") 
{
$phoneErr = "Phone Number required";
} 
else if (!preg_match("/^[0-9]{10}$/", $phone)) 
{
$phoneErr = "Enter Valid Number";
}

if ($gender === "") 
{
$genderErr = "Gender required";
} 

if ($passw === "") 
{
$passwErr = "Password required";
} 
else if (strlen($passw) < 6) 
{
$passwErr = "Enter Valid Password";
}

if ($cpassw === "") 
{
$cpasswErr = "Confirm Password required";
} 
else if ($passw!=$cpassw) 
{
$cpasswErr = "Password do not Match";
}

if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($phoneErr) && empty($genderErr) && empty($passwErr) && empty($cpasswErr)) {
    $registrationSuccess = true;
}
}

?>

<div class="form-container">
    <h2>REGISTRATION FORM</h2>
    <form id="registrationForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" value="<?php echo $fname;?>" placeholder="Enter first name" >
        <div id="passerror" class="error"><?php echo $fnameErr;?></div>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" value="<?php echo $lname;?>" placeholder="Enter last name" >
        <div id="passerror" class="error"><?php echo $lnameErr;?></div>
        
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Enter email">
        <div id="passerror" class="error"><?php echo $emailErr;?></div>
        
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="Enter phone number">
        <div id="passerror" class="error"><?php echo $phoneErr;?></div>
       
        <label for="gender">Gender</label>
        <select id="gender" name="gender" value="gender">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <div id="passerror" class="error"><?php echo $genderErr;?></div>
      
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?php echo $passw;?>" placeholder="Enter password">
        <div id="passerror" class="error"><?php echo $passwErr;?></div>

        <label for="cPassword">Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" value="<?php echo $cpassw;?>" placeholder="Confirm password">
        <div id="passerror" class="error"><?php echo $cpasswErr;?></div>
        <button type="submit">Register</button>
    </form>
    
</div>
<?php

if ($registrationSuccess) {
    echo "<script type='text/javascript'>
            alert('Registration successful!');
          </script>";
}
?>

</body>
</html>
