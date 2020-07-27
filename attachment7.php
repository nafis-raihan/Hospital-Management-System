<html>
	<head>
			<h1> Ward Information Form </h1>
			<title> WELCOME TO WARD </title>>
			<style>
					body{
		margin:0;
		background:url('hospital.jpg');
		background-size: cover;
	}
			form{
			width:1000px;
			margin: auto;
			padding: 70px;
			background:  #0e6655 ;
			font-size: 20px,
			font : bold;
			font-family: verdana;
			color: silver;
			input[type=text]{
				width:80%;
				padding: 5px;
				font-size:18px; 
			}

		}
		</style>
		<style> h1{text-align: center; color: #1f618d;}</style>
		<style>
				table{width:500px;height: 220px;border: 1px solid silver}
				tr,td{border: 1px solid silver ;text-align: center; font-style: bold;}
		</style>
	</head>

	<body>

		<form action="ward_insert.php" method="POST">
			Ward ID:
			<input type="text" name="ward_id"><br><br>
			Ward Name
			<input type="text" name="ward_name"><br><br>
			Registrar ID 
			<input type="text" name="registrar_id">&nbsp;
			Name 
			<input type="text" name="registrar_name"><br><br>
			Nurse Supervisor ID
			<input type="text" name="nurse_sup_id">&nbsp;
			Name
			<input type="text" name="n_name"><br><br>
			<br>
			<table>
					<tr>
						<td>Serial No.</td>
						<td>Bed No. </td>
						<td>Bed Type</td>
						<td>Rent</td>
						<td>Status</td>
					</tr>
					<tr>
						<td><input type="text" name="serial_num"></td>
						<td><input type="text" name="bed_no"></td>
						<td><input type="text" name="bed_type"></td>
						<td><input type="text" name="rent"></td>
						<td><input type="text" name="status"></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
					</tr>

			</table>
			<br><br><br><br><br>

			<input type="submit" name="submit" value="submit">
				<a href="index.html"><button>Home</button>
</a>

		</form>

	</body>
</html>