<?php
include("connect.php");

$id = $_GET['id1'];

$query = "DELETE FROM roms where id = '$id'";

$data = mysqli_query($con,$query);

if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>

	<meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />

	<?php
}
else
{
	echo "<script>alert('Failed To Delete')</script>";
}

?>