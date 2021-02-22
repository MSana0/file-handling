<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
     <?php
          $firstname = $lastname = $emailaddress =$gender = $username = $passwordfield = $recoveryemail = "";
          $firstnameErr = $lastnameErr = $emailaddressErr = $genderErr = $usernameErr = $passwordfieldErr = $recoveryemailErr = "";


          if ($_SERVER["REQUEST_METHOD"] == "POST") 
         {
         	if (empty($_POST['fname'])) 
         	{
         		$firstnameErr = "Enter your first name";
         	}
         	else
         	{
         		$firstname = $_POST['fname'];
         	}

         	if (empty($_POST['lname'])) 
         	{
         		$lastnameErr = "Enter your last name";
         	}
         	else
         	{
         		$lastname = $_POST['lname'];
         	}

         	if (empty($_POST['email'])) 
         	{
         		$emailaddressErr = "Enter your website";
         	}
         	else 
         	{
               $emailaddress = $_POST['email'];
            }
            
            if (empty($_POST['gender']))
             {
            	$genderErr = "Select gender";
            }
            else
            {
            	$gender = $_POST['gender'];
            }

            if (empty($_POST['uname']))
             {
            	$usernameErr = "Enter username";
            }
            else
            {
            	$username = $_POST['uname'];
            }
              
            if (empty($_POST['password']))
            {
            	$passwordfieldErr = "Enter password";
            }
            else
            {
            	$passwordfield = $_POST['password'];
            }

            if (empty($_POST['remail']))
            {
            	$recoveryemailErr = "Enter Recovery email";
            }
            else
            {
            	$recoveryemail = $_POST['remail'];
            }

         	if ($firstnameErr == "" && $lastnameErr == "" && $emailaddressErr == "" && $genderErr == "" && $usernameErr == "" && $passwordfieldErr == "" && $recoveryemailErr == "") 
         	{
         		echo "Successful";
         	}
        }
     ?>

     <?php
       
       $myfile = fopen("store.txt", "w");
       fwrite($myfile, $firstname);
       fwrite($myfile, $lastname);
       fwrite($myfile, $emailaddress);
       fwrite($myfile, $gender);
       fwrite($myfile, $username);
       fwrite($myfile, $passwordfield);
       fwrite($myfile, $recoveryemail);
       fclose($myfile);

     ?>
     <br>
     <h1>Basic Information</h1>
     <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
      	     <label for="firstname">First Name</label>
      	     <input type="text" id="firstname" name="fname" value="<?php echo $firstname ?>">
      	     <br>
      	     <?php echo $firstnameErr; ?>
      	     <br><br>
      	      <label for="lastname">Last Name</label>
      	     <input type="text" id="lastname" name="lname" value="<?php echo $lastname ?>">
      	     <br>
      	     <?php echo $lastnameErr; ?>
      	     <br><br>
      	     <label for="email">Email</label>
      	     <input type="email" id="email" name="email" value="<?php echo $emailaddress ?>">
      	     <br>
      	     <?php echo $emailaddressErr; ?>
      	     <br><br>
      	     <label for="gender">Gender:</label>
      	     <br>
      	     <label for="male">Male</label>
      	     <input type="radio" id="male" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value ="male" >
             <label for="female">Female</label>
             <input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value = "female" >
             <label for="other">Other</label>
             <input type="radio" id="other" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value ="other" >
             <br>
             <?php echo $genderErr; ?>
             <br><br>

             <h1>User Account Information</h1>

             <label for="username">User Name</label>
      	     <input type="text" id="username" name="uname" value="<?php echo $username ?>">
      	     <br>
      	     <?php echo $usernameErr; ?>
      	     <br><br>
      	     <label for="password">Password</label>
      	     <input type="password" id="password" name="password" value="<?php echo $passwordfield ?>">
      	     <br>
      	     <?php echo $passwordfieldErr; ?>
      	     <br><br>
      	     <label for="remail">Recovery Email:</label>
      	     <input type="email" id="remail" name="rmail" value="<?php echo $recoveryemail ?>">
      	     <br>
      	     <?php echo $recoveryemailErr; ?>
      	     <br><br>
      	     <input type="submit" value="Submit">

            

      	     

</body>
</html>