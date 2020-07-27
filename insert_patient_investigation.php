<!DOCTYPE html>
<html>
<head>
	<title>untitled</title>
</head>
<body>

	<?php
	$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'not connected to server';
}

if(!mysqli_select_db($con,'hospital'))
{
	echo 'db not selected';
}
	$nm= $_POST["patient"];
	$ht= $_POST["height"];
	$wt= $_POST["weight"];
	$sym= $_POST["Symptoms"];
	$bp= $_POST["BP"];
	$fbf= $_POST["bfast"];
	$fl= $_POST["Lunch"];
	$fd= $_POST["Dinner"];
	$hb= $_POST["hobby"];
	$sp= $_POST["game"];
	$ot= $_POST["Others"];
	$dnm= $_POST["Disease"];
	$did= $_POST["d_id"];
	$dname= $_POST["d_name"];
	$dg= $_POST["d_desig"];


	$ipi = "INSERT INTO `patient_investigation`(`Name`, `Height`, `Weight`, `symptoms`, `Blood_pressure`, `FoodHabit_Breakfast`, `FoodHabit_Lunch`, `FoodHabit_Dinner`, `Hobby`, `Sports`, `Others`, `Disease`, `Doctor_ID`, `Doctor_Name`, `Designation`) VALUES ('$nm','$ht','$wt','$sym','$bp','$fbf','$fl','$fd','$hb','$sp','$ot','$dnm','$did','$dname','$dg')";

	if(!mysqli_query($con, $ipi))
{
	echo 'not inserted';
}
else
{
	echo 'inserted';
}

header("refresh:2;url=index.html" );

	?>

</body>
</html>