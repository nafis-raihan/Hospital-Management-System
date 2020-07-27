<!DOCTYPE html>
<html>
<head>
	<h1>Medical Advise by the Specialist Form</h1>
	<title>Patient Admission Receipt</title>
		
		<link rel="stylesheet" href="style.css">
		<style>
				body{
		margin:0;
		background:url('hospital.jpg');
		background-size: cover;
	}
			table {
				width: 500px; 
				height: 200px;
				
			}
			table, th, td {
				border: 2px solid black;
				border-bottom: 1px solid silver;
				border-collapse: collapse;
			}
			td, th{
				text-align: center;
				padding: 10px;
				vertical-align:middle;
			}
			tbody tr:hover {
				background: silver;
			}
		
		form{
			width:1700px;
			margin: auto;
			padding: 50px;
			background: #663366;
			font-size: 20px,
			font-family: verdana;
			color: White;
			input[type=text]{
				width:80%;
				padding: 5px;
				font-size:18px; 
			}

		}
	</style>
	<style> h1{text-align: center; color: #1f618d;}
			body{text-align: left;}
		</style>
</head>
<body>
	<form action="advice.php" method="POST">
		
		Date of Advice :
		<input type="text" name="date_of_advice"><tab> 
			Time : <input type="text" name="time"><br><br>

			<h2>Medicine Advice</h2><br><br>

		<table>
			<thead>
				<tr>
					<th>Serial Number</th>
					<th>Name of Medicine</th>
					<th>Quantity</th>
					<th>Times in a day</th>
					<th colspan="2">Morning</th>
					<th colspan="2">Noon</th>
					<th colspan="2">Evening</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td>Before Meal </td>
					<td>After Meal </td>
					<td>Before Meal </td>
					<td>After Meal </td>
					<td>Before Meal </td>
					<td>After Meal </td>
				</tr>
				<tr>
					<td> <input type="text" name="medicine_serial_number"> </td>
					<td><input type="text" name="name_of_medicine"> </td>
					<td><input type="text" name="quantity"> </td>
					<td><input type="text" name="times_per_day"> </td>
					<td> <input type="text" name="morning_before_meal"></td>
					<td> <input type="text" name="morning_after_meal"></td>
					<td> <input type="text" name="noon_before_meal"></td>
					<td> <input type="text" name="noon_after_meal"></td>
					<td> <input type="text" name="evening_before_meal"></td>
					<td> <input type="text" name="evening_after_meal"></td>
				</tr>
				<tr>
					<td><input type="text" name="1"> </td>
					<td> <input type="text" name="1"></td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td> <input type="text" name="1"></td>
					<td> <input type="text" name="1"></td>
					<td> <input type="text" name="1"></td> 
				</tr>
				<tr>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td> <input type="text" name="1"></td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td> <input type="text" name="1"></td>
					<td><input type="text" name="1"> </td>
					<td> <input type="text" name="1"></td>
					<td><input type="text" name="1"> </td> 
				</tr>
				<tr>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td> <input type="text" name="1"></td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td><input type="text" name="1"> </td>
					<td> <input type="text" name="1"></td> 
				</tr>
			</tbody>
		</table>

		<br><br><br>

		<h2>Test Advice</h2><br><br>

		<table>
			<tr>
				<th>Serial Number</th>
				<th>Name Of The Test</th>
			</tr>
			<tbody>
				<tr>
					<td><input type="text" name="test_serial_number"></td>
					<td><input type="text" name="name_of_test"></td>

				</tr>
				<tr>
					<td><input type="text" name="1"></td>
					<td><input type="text" name="1"></td>
					
				</tr>
			

				
			</tbody>

			
		</table>

		<br><br><br><br>

		Signature with date<br><br>
		 Name Of the Doctor: <input type="text" name="name_of_doctor"><br><br>

		Designation:<input type="text" name="designation"><br><br><br>

		<input type="submit" name="submit" value="Submit">
		<a href="index.html"><button>Home</button></a>
			
	</form>

</body>
</html>