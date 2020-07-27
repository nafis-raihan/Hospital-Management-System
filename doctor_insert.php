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
	
	$did= $_POST["Doctor_ID"];
	$dfnm= $_POST["doctor_First_Name"];
	$dmnm= $_POST["doctor_middle_Name"];
	$dlnm= $_POST["doctor_Last_Name"];
	$ddob= $_POST["date_of_birth"];
	$doap= $_POST["date_of_appointment"];
	$es= $_POST["serial_number"];
	$deg= $_POST["degree"];
	$b= $_POST["board"];
	$y= $_POST["year"];
	$div= $_POST["division"];
	$pos= $_POST["position"];
	$exs= $_POST["experience_serial"];
	$j= $_POST["job_title"];
	$fr= $_POST["dfrom"];
	$to= $_POST["dto"];
	$org= $_POST["organization"];
	$dch= $_POST["doctor_choice"];


	$res = "INSERT INTO `doctor`(`Doctor_ID`, `D_First_name`, `D_middle_name`, `D_last_name`, `D_Date_of_birth`, `D_Date_of_Appoinment`, `D_Education_serial`, `D_Degree`, `D_Board`, `D_Year`, `D_division`, `D_position`, `D_experience_serial`, `D_job_title`, `D_From_Year`, `D_to_year`, `D_organization`, `Doctor_choice`) VALUES ('$did','$dfnm','$dmnm','$dlnm','$ddob','$doap','$es','$deg','$b','$y','$div','$pos','$exs','$j','$fr','$to','$org','$dch')";

	if(!mysqli_query($con, $res))
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