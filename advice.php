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
	$doad= $_POST["date_of_advice"];
	$t= $_POST["time"];
	$medsn= $_POST["medicine_serial_number"];
	$nmed= $_POST["name_of_medicine"];
	$qn= $_POST["quantity"];
	$td= $_POST["times_per_day"];
	$morbm= $_POST["morning_before_meal"];
	$moram= $_POST["morning_after_meal"];
	$noonbm= $_POST["noon_before_meal"];
	$noonam= $_POST["noon_after_meal"];
	$evebm= $_POST["evening_before_meal"];
	$eveam= $_POST["evening_after_meal"];
	$tsn= $_POST["test_serial_number"];
	$nt= $_POST["name_of_test"];
	$nd= $_POST["name_of_doctor"];
	$dg= $_POST["designation"];
	


	$res = "INSERT INTO `advice`(`Date_of_advice`, `Time`, `serial_no`, `Medicine_name`, `M_Quantity`, `Times_per_day`, `Morning_before_meal`, `Morning_after-meal`, `noon_before_meal`, `noon_after_meal`, `dinner_before-meal`, `dinner_after_meal`, `test_serial`, `test_name`, `Advisor`, `A_designation`) VALUES ('$doad','$t','$medsn','$nmed','$qn','$td','$morbm','$moram','$noonbm','$noonam','$evebm','$eveam','$tsn','$nt','$nd','$dg')";

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