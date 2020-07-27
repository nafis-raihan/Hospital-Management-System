<!DOCTYPE html>
<html>
<head>
	<h1 style="text-align: center;">Patient Admission Receipt</h1>
	<title>Receipt</title>
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
	<?php
		$con = mysqli_connect('127.0.0.1','root','','hospital');

if(!$con)
{
	echo 'not connected to server';
}
$que = "SELECT * FROM patient where patient_ID='".$_GET['id']."'";
$res = mysqli_query($con, $que);
while($row = mysqli_fetch_assoc($res)) {
            echo "Time is: " . $row['first_name']. "<br>";

	$fnm= $row["first_name"];
	$mnm= $row["middle_name"];
	$lnm= $row["last_name"];
	$dob= $row["date_of_birth"];
	$mob1= $row["mobile1"];
	$mob2= $row["mobile2"];
	$pr1= $row["pr_street_no"];
	$pr2= $row["pr_street_name"];
	$pr3= $row["pr_area"];
	$pr4= $row["pr_thana"];
	$pr5= $row["pr_district"];
	$p1= $row["pstreet_no"];
	$p2= $row["pstreet_name"];
	$p3= $row["parea"];
	$p4= $row["pthana"];
	$p5= $row["pdistrict"];
	$prof= $row["profession"];
	$ad= $row["amount_deposited"];
	$ch= $row["choice"];
        }
	?>
	<form>
		Date of Admission
		<input type="text" date="Date of Admission">(DD/MM/YYYY)<br><br>
		First name
		<input type="text"  name="First Name" value="<?php echo $fnm;?>"><br><br>
		Middle name
		<input type="text" name="middle Name" value="<?php echo $mnm;?>"><br><br>
		Last name
		<input type="text" name="Last Name"  value="<?php echo $lnm;?>"><br><br>
		Date of Birth :
		<input type="text" name="date of birth"  value="<?php echo $dob;?>"><br><br>
		mobile (1)
		<input type="text" name="mob1"  value="<?php echo $mob1;?>"><tab><tab>
			mobile (2)
			<input type="text" name="mob2"  value="<?php echo $mob2;?>"><br><br>
		<h2>Present Address</h2>
		Street no./Village
		<input type="text" name="street"  value="<?php echo $pr1;?>"><tab><tab>
			Street Name
			<input type="text" name="street name"  value="<?php echo $pr2;?>"><tab><tab><br><br>
				Area 
				<input type="text" name="area"  value="<?php echo $pr3;?>"><tab><tab>
					Thana
					<input type="text" name="thana"  value="<?php echo $pr4;?>"><tab><tab>
						District
						<input type="text" name="district"  value="<?php echo $pr5;?>"><tab><tab><br><br>

		<h2>Permanent Address</h2>
		Street no./Village
		<input type="text" name="street"  value="<?php echo $p1;?>"><tab><tab>
			Street Name
			<input type="text" name="street name" value="<?php echo $p2;?>"><tab><tab><br><br>
				Area 
				<input type="text" name="area" value="<?php echo $p3;?>"><tab><tab>
					Thana
					<input type="text" name="thana" value="<?php echo $p4;?>"><tab><tab>\
						District
						<input type="text" name="district" value="<?php echo $p5?>"><tab><tab><br><br>

		Profession:
		<input type="text" name="Profession"  value="<?php echo $prof;?>"><br><br>
		

		Amount Deposited:
		<input type="text" name="amount"  value="<?php echo $ad;?>"><br><br>
		cabin No.
		<input type="text" name="cabin"  value="<?php echo $ch;?>"><tab>or<tab>
			Ward No.
			<input type="text" name="ward"><tab><tab>
				Bed No.
				<input type="text" name="bed"><br><br><br><br><br>

		Signature with date<br>
		Name:<br>
		Relation With Patient:<br>
			
	</form>

</body>
</html>

