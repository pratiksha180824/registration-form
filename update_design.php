<?php include("connection.php"); 

$ID= $_GET['id'];

$query= "select * from form where ID='$ID'";
$data= mysqli_query($conn,$query);


$result = mysqli_fetch_assoc($data)
?>
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
			UPDATE STUDENT DETAILS
		</div>

		<div class="form">
			<div class="input_field">
				<label>First Name</label>
				<input type="text" value="<?php echo $result['fname']; ?>" class ="input" name="fname"required>
				
			</div>
			<div class="input_field">
				<label>Last Name</label>
				<input type="text" value="<?php echo $result['lname']; ?>" class ="input" name="lname"required>
				
			</div>
			<div class="input_field">
				<label>Password</label>
				<input type="Password" value="<?php echo $result['password']; ?>" class ="input" name="password"required>
				
			</div>
			<div class="input_field">
				<label>Confirm Password</label>
				<input type="Password"  value="<?php echo $result['cpassword']; ?>" class ="input" name="conpassword"required>
				
			</div>
			<div class="input_field">
				<label>Gender</label>
				<select class="selectbox" name="gender"required>
					<option>select</option>

					<option value="male"
					<?php 
						if ($result['gender'] =='Male')
						 {
							echo "selected";
						}

					 ?>
					>
					Male</option>
					<option value="female"
					<?php 
						if ($result['gender'] =='Female')
						 {
							echo "selected";
						}

					 ?>>Female</option>
				</select>
				
				
			</div>
			<div class="input_field">
				<label>Email Address</label>
				<input type="text" value="<?php echo $result['email']; ?>" class ="input" name="email"required>
				
			</div>
			<div class="input_field">
				<label>Phone Number</label>
				<input type="text" value="<?php echo $result['phone']; ?>" class ="input" name="phone"required>
				
			</div>

			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required>
					<span class="checkmark" required></span>
				</label>
				<p>Agree to terms and condition</p>
			</div>
			<div class="input_field">
				<input type="submit" value="Update" class="btn" name="Update">
			</div>
			
		</div>
		</form>
	</div>

</body>
</html>

<?php
error_reporting(0);
	if($_POST['Update'])
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
		
		$query = "Update form set fname='$fname' , lname='$lname', password='$pwd', cpassword='$cpwd', gender='$gender' , email='$email', phone='$phone' where ID='$ID'";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "<script>alert('Records Updated Successfully')</script>";
			?>

			<meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php">

			<?php
		}
		else
		{
			echo"Failed";
		
		}


	}
}
		
	
?>