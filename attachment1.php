<!DOCTYPE html>
<html>
<head>
	<h1 style="text-align: center;">Patient Admission Form</h1>
	<title>Welcome Patients</title>
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
			background: #663366;
			font-size: 20px,
			font :bold;
			font-family: verdana;
			color: silver;
			input[type=text]{
				width:80%;
				padding: 5px;
				font-size:18px; 
			}

		}
	</style>
	<style> h1{text-align: center}
			body{text-align: left;}</style>
</head>
<body>
	<form action="insert_patient.php" method="POST">
		First name
		<input type="text"  name="First_Name" ><tab></tab>
		Middle name
		<input type="text" name="middle_Name" ><tab>
		Last name
		<input type="text" name="Last_Name" ><br><br>
		Date of Birth :
		<input type="text" name="date_of_birth" ><br><br>
		mobile (1)
		<input type="text" name="mob1" ><tab><tab>
			mobile (2)
			<input type="text" name="mob2" ><br><br>
		<h2>Present Address</h2>
		Street no./Village
		<input type="text" name="pr_street" ><tab><tab>
			Street Name
			<input type="text" name="pr_street_name" ><tab><tab><br><br>
				Area 
				<input type="text" name="pr_area" ><tab><tab>
					Thana
					<input type="text" name="pr_thana" ><tab><tab>
						District
						<input type="text" name="pr_district" ><tab><tab><br><br>

		<h2>Permanent Address</h2>
		Street no./Village
		<input type="text" name="p_street" ><tab><tab>
			Street Name
			<input type="text" name="p_street name" ><tab><tab><br><br>
				Area 
				<input type="text" name="p_area" ><tab><tab>
					Thana
					<input type="text" name="p_thana" ><tab><tab>
						District
						<input type="text" name="p_district"><tab><tab><br><br>

		Profession:
		<input type="text" name="Profession" ><br><br>
		

		Amount Deposited:
		<input type="text" name="amount"><br><br>
		<h2>Choice</h2>
		<input type="checkbox" name="choice" value="Cabin" >&nbsp; Cabin <br>
		<input type="checkbox" name="choice" value="Ward">&nbsp; Ward <br><br><br>

		Signature with date:   <input type="text" name="Signature" ><br><br>
		Name:                  <input type="text" name="name" ><br><br>
		Relation With Patient: <input type="text" name="Relation" ><br><br><br>

		<input type="submit" name="submit" value="Submit">


			
	</form>

</body>
</html>