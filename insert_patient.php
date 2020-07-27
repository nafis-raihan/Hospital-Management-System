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
	//$doa= $_POST["date_of_admit"];
	$fnm= $_POST["First_Name"];
	$mnm= $_POST["middle_Name"];
	$lnm= $_POST["Last_Name"];
	$dob= $_POST["date_of_birth"];
	$mob1= $_POST["mob1"];
	$mob2= $_POST["mob2"];
	$pr1= $_POST["pr_street"];
	$pr2= $_POST["pr_street_name"];
	$pr3= $_POST["pr_area"];
	$pr4= $_POST["pr_thana"];
	$pr5= $_POST["pr_district"];
	$p1= $_POST["p_street"];
	$p2= $_POST["p_street_name"];
	$p3= $_POST["p_area"];
	$p4= $_POST["p_thana"];
	$p5= $_POST["p_district"];
	$prof= $_POST["Profession"];
	$ad= $_POST["amount"];
	$ch= $_POST["choice"];
	//$rl= $_POST["Relation"];


	$res = "INSERT INTO patient ( first_name, middle_name, last_name, date_of_birth, mobile1, mobile2, pr_street_no, pr_street_name, pr_area, pr_thana, pr_district, pstreet_no, pstreet_name, parea, pthana, pdistrict , profession, amount_deposited, choice) VALUES('$fnm','$mnm','$lnm','$dob','$mob1','$mob2','$pr1','$pr2','$pr3','$pr4','$pr5','$p1','$p2','$p3','$p4','$p5','$prof','$ad','$ch')";

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