<?php include("connect.php"); ?> 
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
			Registration Form
		</div>

		<div class="form">
			<div class="input_field">
				<label>Certificate No.</label>
				<input type="text" class="input" name = "Certificate"
				placeholder="certificate number" required>
			</div>

			<div class="input_field">
				<label>Issued Date</label>
				<input type="date" class="input" name = "id" required>
			</div>

			<div class="input_field">
				<label>Name Of Student</label>
				<input type="text" class="input" name = "nos" placeholder = "Enter student name"
				required>
			</div>

			
			<div class="input_field">
				<label>Gender</label>
				<select class="selectbox" name = "gender" required>
					<option hidden>Select gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option>Others</option>
				</select>
			</div>

			<div class="input_field">
				<label>Birth Date</label>
				<input type="date" class="input" name ="bd" required>
			</div>

			<div class="input_field">
				<label style = "margin-right: 130px">Duration</label>
				<input type="radio" name = "q/m" value = "Quarterly" required>
				<label style = "margin-left: 5px">Quarterly</label>

				<input type="radio" name = "q/m" value = "Monthly" required>
				<label style = "margin-left: 5px">Monthly</label>
			</div>

			<!-- <div class="input_field">
				<label>Concession</label>
				<input type="date" class="input" name ="concession" required>
			</div> -->

			 <div class="input_field">
				<label>Concession</label>

				<label for="from">From</label>
				<input id = "from" type="date" class="input" name ="concession"   required>

				<label  for="to">To</label>
				<input id = "to" type="date" class="input" name ="concession" required>
			</div> 

			<div class="input_field">
				<label style = "margin-right: 135px">Caste</label>
				<!-- radio buttons ke liye -->
				<input type="radio" name = "caste" value = "Open" required>
				<label style = "margin-left: 5px">Open</label>

				<input type="radio" name = "caste" value = "SC" required>
				<label style = "margin-left: 5px">SC</label>

				<input type="radio" name = "caste" value = "ST" required>
				<label style = "margin-left: 5px">ST</label>
			</div>
			<div class="input_field">
				<label>Student Residential Address</label>
				<textarea class="textarea" name = "sra" placeholder = "Enter student address" required></textarea>
			</div>

			<div class="input_field">
				<input type = "submit" value="Register" class = "btn" name = "submit">
				
			</div>
		</div>
	</form>

	</div>		
</body>
</html>

<?php
 	if($_POST['submit'])
 	//MATLAB SUBMIT BUTTON PRESS HUA TOH
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

 		if($certificate != "" && $issued_date != "" && $name_of_students != "" && $gender != "" && $birth_date != "" && $monthly_quartly != "" && $concession  != "" && $caste != "" && $stu_res_address != "") 
 		{
 			$insert = "INSERT INTO roms (Certificate,issued_date,name_of_students,gender,birth_date,monthly_quartly,concession,caste,stu_res_address) VALUES('$certificate','$issued_date','$name_of_students','$gender','$birth_date','$monthly_quartly','$concession','$caste','$stu_res_address')";

 			$insert_ok = mysqli_query($con,$insert); //query execute hoyegi isse

 			if($insert_ok){
 			echo "Data Inserted";
 			}
 			else{
 			echo "Data Insertion failed".mysqli_connect_error();
 			}
 		}

 		else{
 			echo "<script>alert('Please fill every field');</script>";
 		}

 	}

?>



