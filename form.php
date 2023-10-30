<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PHP CRUD operations</title>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Registration Form
		</div>

		<div class="form">
			<div class="input_field">
				<label>First Name</label>
				<input type="text" class ="input" name="fname"required>
				
			</div>
			<div class="input_field">
				<label>Last Name</label>
				<input type="text" class ="input" name="lname"required>
				
			</div>
			<div class="input_field">
				<label>Password</label>
				<input type="Password" class ="input" name="password"required>
				
			</div>
			<div class="input_field">
				<label>Confirm Password</label>
				<input type="Password" class ="input" name="conpassword"required>
				
			</div>
			<div class="input_field">
				<label>Gender</label>
				<select class="selectbox" name="gender"required>
					<option>select</option>
					<option>Male</option>
					<option>Female</option>
				</select>
				
				
			</div>
			<div class="input_field">
				<label>Email Address</label>
				<input type="text" class ="input" name="email"required>
				
			</div>
			<div class="input_field">
				<label>Phone Number</label>
				<input type="text" class ="input" name="phone"required>
				
			</div>

			<div class="input_field terms">
				<label class="check">
					<input type="checkbox"required>
					<span class="checkmark" required></span>
				</label>
				<p>Agree to terms and condition </p>
			</div>
			<div class="input_field">
				<input type="submit" value="Register" class="btn" name="register"required>
			</div>
			
		</div>
		</form>
	</div>

</body>
</html>

<?php
error_reporting(0);
	if($_POST['register'])
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$pwd   = $_POST['password'];
		$cpwd  = $_POST['conpassword'];
		$gender= $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		if($fname !="" && $lname !="" && $pwd !="" && $gender !="" && $email !=""  && $phone !="")
		{
		$query = "INSERT INTO form(fname,lname ,password,cpassword,gender,email,phone) values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo"data inserted into database";
		}
		else
		{
			echo"Failed";
		
		}


	}
}
		
	
?>