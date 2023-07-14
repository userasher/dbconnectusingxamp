<html>
<head>
	<title>Student Record</title>
	<style> 
/*display.php vala web page ka style yaha se*/
		body
		{

			background: sandybrown;
		}
		table
		{
			background-color: white;
			padding: 2px;
			text-align: center;
			justify-content: left;
		}

		.update, .delete
		{
			background-color: green;
			border-radius: 3px;
			outline: none;
			color: whitesmoke;
			height: 50%;
			width: auto;
			font-weight: bold;
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
	include("connect.php");
	error_reporting(0);

	$query = "SELECT * FROM roms";

	$data = mysqli_query($con,$query); //query chali ki nahi

	$total = mysqli_num_rows($data); //database ke andar kitne rows columns hai
	//tells no. of rows in database

	$result = mysqli_fetch_assoc($data);
	// echo $data_present;
	// echo $final_display; 
	//batayaga ki records present hai in the form 
	//of array
	// echo $final_display[gender];
	// if($data_present != 0){
	// 	echo "Table has records";
	// }
	// else{
	// 	echo "No records found";
	// }

	if($result != 0){
		?>

		<h2 align = "center">All Records</h2>
		<center>
			<table border="2" cellspacing="5" width = "100%">
		<tr>
			<th width = "7%">Certificate No.</th>
			<th width = "7%">Issued Date</th>
			<th width = "13%">Name Of Student</th>
			<th width = "5%">Gender</th>
			<th width = "8%">Birth Date</th>
			<th width = "5%">Quartly/Monthly</th>
			<th width = "15%">Concession</th>
			<th width = "5%">Caste</th>
			<th width = "20%">Students Residential Address</th>
			<th width = "15%">Operations</th>
		</tr>
		<?php

	while($result = mysqli_fetch_assoc($data))
		{
			echo "<tr>
					<td id = '1'>".$result['Certificate']."</td>
					<td>".$result['issued_date']."</td>
					<td>".$result['name_of_students']."</td>
					<td>".$result['gender']."</td>
					<td>".$result['birth_date']."</td>
					<td>".$result['monthly_quartly']."</td>
					<td>".$result['concession']."</td>
					<td>".$result['caste']."</td>
					<td>".$result['stu_res_address']."</td>
					<td><a href = 'update_design.php?id1=$result[id]'>
						<input type = 'submit' value='Update' class='update'>
						</a>
				
						<a href = 'delete_design.php?id1=$result[id]'>
						<input type = 'submit' value='Delete' class='delete' onclick = 'return checkdelete()'>
						</a>
					</td>
					
			</tr> ";
			//concatenate kiya hai html aur php ko dot lagake
		}
	}
	else
	{
		echo "No Records Found";
	}
?>
		</table>
	</center>

	<script>  //ye javascript ka fucntion jo alert box layega delete button click hone ke baad
		function checkdelete()
		{
			return confirm('Are you sure you want to delete this record ?')
		}

	</script>

<!-- echo $result['Certificate']."    ".$result['issued_date']."    ".$result['gender']."    ".$result['birth_date']."    ".$result['monthly_quartly']."    ".$result['concession']."    ".$result['caste']."    ".$result['stu_res_address']."<br>"; -->