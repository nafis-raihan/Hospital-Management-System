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

	$wid=$_POST["ward_id"];
	$wnm= $_POST["ward_name"];
	$ri= $_POST["registrar_id"];
	$rn= $_POST["registrar_name"];
	$nsi= $_POST["nurse_sup_id"];
	$nsn= $_POST["n_name"];
	$s= $_POST["serial_num"];
	$bn= $_POST["bed_no"];
	$bt= $_POST["bed_type"];
	$re= $_POST["rent"];
	$sta= $_POST["status"];
	
	

	$res = "INSERT INTO `ward`(`Ward_ID`, `Ward_name`, `Registrar_ID`, `Registrar_Name`, `Nurse_SuperVisor_ID`, `Nurse_SuperVisor_Name`, `Serial_no`, `Bed_no`, `Type`, `Rent`, `Status`) VALUES ('$wid','$wnm','$ri','$rn','$nsi','$nsn','$s','$bn','$bt','$re','$sta')";

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