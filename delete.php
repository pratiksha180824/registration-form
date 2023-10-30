<?php
include("connection.php");

$ID= $_GET['id'];

$query = "delete from form where ID='$ID' ";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Records Deleted Successfully')</script>";
	?>

	<meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php/">



	<?php
}
else
{
	echo "Failed to delete";
}
?>