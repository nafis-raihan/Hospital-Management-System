<html>
	<head>
			<h1>Nurse Information Form </h1>
			<title>WELCOME</title>>
			<style>
					body{
		margin:0;
		background:url('hospital.jpg');
		background-size: cover;
	}
			form{
			width:1000px;
			margin: auto;
			padding: 70px;
			background: #873600 ;
			font-size: 20px,
			font : bold;
			font-family: verdana;
			color: silver;
			input[type=text]{
				width:80%;
				padding: 5px;
				font-size:18px; 
			}

		}
		</style>
		<style> h1{text-align: center; color: #1f618d;}</style>
		<style>
				table{width:500px;height: 220px;border: 1px solid silver}
				tr,td{border: 1px solid silver ;text-align: center; font-style: bold;}
		</style>
	</head>

	<body>

		<form action="nurse_insert.php" method="POST">
			Nurse ID:
			<input type="text" name="nurse_ID"><br><br>
			First Name
			<input type="text" name="nurse_First_Name">&nbsp;
			Middle Name 
			<input type="text" name="nurse_middle_Name">&nbsp;
			Last Name 
			<input type="text" name="nurse_Last_Name"><br><br>
			Date Of Birth
			<input type="Date" name="date_of_birth"><br><br>
			Date of Appointment
			<input type="Date" name="date_of_appointment"><br><br>
			Educational Qualifications<br><br>
			<table>
					<tr>
						<td>Serial No.</td>
						<td>Degree </td>
						<td>Board/Institute</td>
						<td>Year</td>
						<td>Division/CGPA</td>
						<td>Position</td>
					</tr>
					<tr>
						<td><input type="text" name="serial_number"></td>
						<td><input type="text" name="degree"></td>
						<td><input type="text" name="board"></td>
						<td><input type="text" name="year"></td>
						<td><input type="text" name="division"></td>
						<td><input type="text" name="position"></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
					</tr>

			</table><br><br>
			Experience<br><br>
			<table>
					<tr>
						<td>Serial No.</td>
						<td>Job Title </td>
						<td>From</td>
						<td>To</td>
						<td>Organization</td>
					</tr>
					<tr>
						<td><input type="text" name="experience_serial"></td>
						<td><input type="text" name="job_title"></td>
						<td><input type="text" name="dfrom"></td>
						<td><input type="text" name="dto"></td>
						<td><input type="text" name="organization"></td>
						
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						
					</tr>

			</table><br><br>
			

			<br><br><br><br><br>

			<input type="submit" name="submit" value="submit">
				<a href="index.html"><button>Home</button>
</a>

		</form>

	</body>
</html>