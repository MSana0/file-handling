<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>

	<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST") {
			
			if(empty($_POST['fname']) && empty($_POST['lname'])) {
				echo "Please fill up the form properly";
			} 
			else {
				$firstname = $_POST['fname'];
				$lastname = $_POST['lname'];
				echo "Client name is: $firstName $lastName";

				$f=fopen("store.txt", "a");
				fwrite($f, $firstname." ".$lastname)
			}
		}
	?>

</body>
</html>