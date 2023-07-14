 <?php include("connect.php"); 
$id = $_GET['id1'];
$query = "SELECT * FROM roms where id = '$id'"; //upar wala id variable hai wo
$data = mysqli_query($con,$query); //query chali ki nahi
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
 ?> 
<!-- iss line ke vajah se database se connected hai ye page -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Student Data</title>

</head>

<body>
	<div class="container">
	<form action="#" method="POST">
		<div class="title">
			Update Details
		</div>

		<div class="form">
			<div class="input_field">
				<label>Certificate No.</label>
				<input type="text" value = "<?php echo $result['Certificate'] ?>" class="input" name = "Certificate" required>
			</div>

			<div class="input_field">
				<label>Issue Date</label>
				<input type="text" value ="<?php echo $result['issued_date'] ?>" class="input" name = "id" required>
			</div>

			<div class="input_field">
				<label>Name Of Students</label>
				<input type="text" value ="<?php echo $result['name_of_students'] ?>" class="input" name = "nos" required>
			</div>

			<div class="input_field">
				<label>Gender</label>

				<select class="selectbox" value ="<?php echo $result['gender'] ?>" name = "gender" required>
					<option value="">Select</option>
					<option value="male"
						<?php 
						if($result['gender'] == 'male')
							echo "selected"
						 ?>
					>Male</option>
					<option value="female"
					 <?php 
						if($result['gender'] == 'female')
							echo "selected"
						 ?>
					>Female</option>
					<option
					 <?php 
						if($result['gender'] == 'Others')
							echo "selected"
						 ?>
					>Others</option>
				</select>

			</div>

			<div class="input_field">
				<label>Birth Date</label>
				<input type="text" value ="<?php echo $result['birth_date'] ?>" class="input" name ="bd" required>
			</div>

			<div class="input_field">
				<label>Quartly/Monthly</label>
				<input type="text" value ="<?php echo $result['monthly_quartly'] ?>" class="input" name ="q/m" required>
			</div>

			<div class="input_field">
				<label>Concession</label>
				<input type="text" value ="<?php echo $result['concession'] ?>"class="input" name ="concession" required>
			</div>

			<div class="input_field">
				<label>Caste</label>
				<input type="text" value ="<?php echo $result['caste'] ?>" class="input" name ="caste" required>
			</div>

			<div class="input_field">
				<label>Students Residential Address</label>
				<textarea class="textarea"  name = "sra" required>
					<?php echo $result['stu_res_address']; ?>
				</textarea>
			</div>

			<div class="input_field">
				<input type = "submit"  value="Update" class = "btn" name = "update">
				
			</div>
		</div>
	</form>

	</div>		
</body>
</html>

<?php
 	if($_POST['update'])
 	//MATLAB update BUTTON PRESS HUA TOH
 	{
 		$certificate 		= $_POST['Certificate'];
 		$issued_date 		= $_POST['id'];
 		$name_of_students 	= $_POST['nos'];
 		$gender 			= $_POST['gender'];
 		$birth_date 		= $_POST['bd'];
 		$monthly_quartly 	= $_POST['q/m'];
 		$concession 		= $_POST['concession'];
 		$caste 				= $_POST['caste'];
 		$stu_res_address 	= $_POST['sra'];

 
 		
 			// $insert = "INSERT INTO roms VALUES('$certificate','$issued_date','$name_of_students','$gender','$birth_date','$monthly_quartly','$concession','$caste','$stu_res_address')";

 			$update = "UPDATE roms set 

 			Certificate='$certificate', 
 			issued_date='$issued_date',
 			name_of_students='$name_of_students',
 			gender='$gender',
 			birth_date='$birth_date',
 			monthly_quartly='$monthly_quartly',
 			concession='$concession',
 			caste='$caste',
 			stu_res_address='$stu_res_address' 

 			WHERE id = '$id'";
 			// white vale jo hai wo database ke table se match karalo


 			$data = mysqli_query($con,$update); //query execute hoyegi isse

 			if($data){
 			echo "<script>alert('Record Updated')</script>"; 
 			// javascript use ki hai record updated dikhai dega
 			// vapis display vale page pe jane se pahile
 			?>

 			<meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />
 			<!-- redirect kar raha hai display vale page pe -->

 			<?php

 			}
 			else{
 			echo "Data update failed".mysqli_connect_error();
 			}
 		
 			// else{
 			// echo "<script>alert('Fill every field Please');</script>";
 			// }

 	}

?>
