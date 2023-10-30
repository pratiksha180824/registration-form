<html>
<head>
	<title>Display</title>
	<style>
		body
		{
			background: #D071F9;
		}
		table
		{
			background-color: white;
		}
		.update, .delete
		{
			background-color: green;
			color: white;
			border: 0;
			outline: none;
			border-radius: 5px;
			height: 22px;
			widows: 80px;
			font-weight:bold;
			cursor: pointer;
		}
			.delete
		{
			background-color: red;
				}
	</style>
</head>
</html>
<?php
include("connection.php");
error_reporting(0);
$query= "select * from form";
$data= mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


echo $result ['fname']." ".$result ['lname']." ".$result ['gender']." ".$result ['email']." ".$result ['phone'];

//echo $result ;


//echo $total;

if($total != 0)
{
	?>

		<h2 align="center"><mark>Displaying All Records</mark></h2>
		<table border="1" cellspacing="7" width="75%" align="center">
			<tr>
			<th width="5%">ID</th>
			<th width="8%">First Name</th>
			<th width="8%">last Name</th>
			<th width="10%">Gender</th>
			<th width="20%">Email</th>
			<th width="10%">Phone Number</th>
			<th width="14%">Operations</th>
			</tr>
			</tr>
		




	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['ID']."</td>
				<td>".$result['fname']."</td>
				<td>".$result['lname']."</td>
				<td>".$result['gender']."</td>
				<td>".$result['email']."</td>
				<td>".$result['phone']."</td>

				<td><a href='update_design.php?id=$result[ID]'><input type='submit' value='Update' class='update'></a>

				<a href='delete.php?id=$result[ID]'><input type='submit' value='Delete' class='delete' onclick = 'return check_delete()'></a></td>
			</tr>
			 ";
	
	}
}
else
{
	echo "No records found";
}

?>
</table>

<script>
	
	function check_delete()
	{
		return confirm('Are you sure you want to delete this record ?');
	}

</script>

