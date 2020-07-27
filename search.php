<!DOCTYPE html>
<html>
<head>
	<title>SE</title>
</head>
<body>
<form method="get" action="Attachment2.php">
	<input type="name" name="id">
	<input type="submit" name="" value="submit">
</form>
	<?php
		$con = mysqli_connect('127.0.0.1','root','','hospital');

if(!$con)
{
	echo 'not connected to server';
}
$que = "SELECT * FROM patient";
$res = mysqli_query($con, $que);
?>
<table border=1>
<tr><th>id</th><th>first name</th><th>last name</th><th>.</th></tr>
	<?php
while($row = mysqli_fetch_assoc($res)) {
            echo "<tr><td>".$row['patient_ID']."</td><td>" . $row['first_name']. "</td><td>".$row['last_name']."</td><td><a href='Attachment2.php?id=".$row['patient_ID']."'>load Data</a></td></tr>";
            $first_name = $row['first_name'];
        }
	?>
	</table>

</body>
</html>