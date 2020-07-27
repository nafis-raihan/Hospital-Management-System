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
	
	$n_id= $_POST["nurse_ID"];
	$nfnm= $_POST["nurse_First_Name"];
	$nmnm= $_POST["nurse_middle_Name"];
	$nlnm= $_POST["nurse_Last_Name"];
	$ndob= $_POST["date_of_birth"];
	$noap= $_POST["date_of_appointment"];
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
	

	$res = "INSERT INTO `nurse`(`Nurse_ID`, `N_First_name`, `N_Middle_name`, `N_Last_name`, `N_Date_of_birth`, `N_Date_of_App`, `Education_serial`, `Degree`, `Board`, `Year`,`division`, `position`, `Experience_serial`, `Job_Title`, `From_Year`, `To_Year`, `Organization`) VALUES ('$n_id','$nfnm','$nmnm','$nlnm','$ndob','$noap','$es','$deg','$b','$y','$div','$pos','$exs','$j','$fr','$to','$org')";

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