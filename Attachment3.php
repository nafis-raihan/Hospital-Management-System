<!DOCTYPE html>
<html>
<head>
	<h1 style="text-align: center;">Patient Initial Investigation Form</h1>
	<title>Patient Admission Receipt</title>
	<style>
			body{
		margin:0;
		background:url('hospital.jpg');
		background-size: cover;
	}
		form{
			width:700px;
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
</head>
<body>
	<form action="insert_patient_investigation.php" method="POST">
		Name of the patient:
		<input type="test" name="patient">
		<h2>Patient Personal Information</h2>
		Height:
		<input type="text" name="height"><tab>
			Weight:
			<input type="text" name="weight"><br><br><br><br>
		Symptoms of the Disease: 1. <input type="text" name="Symptoms"><tab> 2. <input type="text" name="Symptoms"><tab> 3. <input type="text" name="Symptoms"><br><br>
								 4. <input type="text" name="Symptoms"><tab> 5. <input type="text" name="Symptoms"><tab> 6. <input type="text" name="Symptoms"><br><br><br><br>

		Blood Pressure: Lower <input type="text" name="BP"><tab> 	Upper <input type="text" name="BP"><br><br>

			General Food Habit:<br><br>

			BreakFast : 1.<input type="text" name="bfast"><tab> 2. <input type="text" name="bfast"><tab> 3. <input type="text" name="bfast"><br><br>

				Lunch: 1. <input type="text" name="Lunch"><tab> 2. <input type="text" name="Lunch"><tab> 3. <input type="text" name="Lunch"><br><br>

					Dinner: 1. <input type="text" name="Dinner"><tab> 2. <input type="text" name="Dinner"><tab> 3. <input type="text" name="Dinner"><br><br><br><br>


		Hobby:
		<input type="text" name="hobby"><br><br>
		Sports: 
		<input type="radio" name="game" value="Football">Football<tab><input type="radio" name="game" value="Hockey">Hockey<tab><input type="radio" name="game" value="volleyball">Volley Ball<tab>
			<input type="radio" name="game" value="Cricket">Cricket<tab><input type="radio" name="game" value="Chess">Chess<tab>
				<input type="radio" name="game" value="None">None<br><br><br>

		Others:
		<input type="radio" name="Others" value="Tourism">Tourism<tab><input type="radio" name="Others" value="Writing">Writing<br><br>

		Disease Name: 
		<input type="text" name="Disease"><br><br><br><br>


		Signature with date<br><br>
		Doctor Id:<input type="text" name="d_id"><tab> Name Of the Doctor: <input type="text" name="d_name"><br><br>

		Designation:<input type="text" name="d_desig"><br><br><br>

		<input type="submit" name="submit" value="Submit">
			<a href="index.html"><button>Home</button></a>

			
	</form>

</body>
</html>