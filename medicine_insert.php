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

	$sid=$_POST["supplier_id"];
	$snm= $_POST["supplier_Name"];
	$dos= $_POST["date_of_supply"];
	$mid= $_POST["medicine_id"];
	$mn= $_POST["name"];
	$t= $_POST["type"];
	$up= $_POST["unit_price"];
	$q= $_POST["quantity"];
	$dom= $_POST["date_of_manufacture"];
	$ed= $_POST["expiry_date"];
	
	

	$res = "INSERT INTO `medicine`(`Supplier_ID`, `Supplier_name`, `Date_of_Supply`, `Medicine_ID`, `Medicine_Name`, `Type`, `Unit_price`, `Quantity`, `Date_of_manufacture`, `Expiry_Date`) VALUES ('$sid','$snm','$dos','$mid','$mn','$t','$up','$q','$dom','$ed')";

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