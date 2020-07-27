 <html>
	<head>
			<h1> Medicine Entry</h1>
			<title> Medicine </title>>
			<style>
					body{
		margin:0;
		background:url('hospital.jpg');
		background-size: cover;
	}
			form{
			width:1100px;
			margin: auto;
			padding: 70px;
			background:   #ec7063 ;
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

		<form action="medicine_insert.php" method="POST">
			Supplier ID:
			<input type="text" name="supplier_id">&nbsp;
			Supplier Name
			<input type="text" name="supplier_Name"><br><br><br>
		
			Date of Supply
			<input type="date" name="date_of_supply"><br><br>
			<table>
					<tr>
						<td>Medicine ID</td>
						<td>Name</td>
						<td>Type</td>
						<td>Unit Price</td>
						<td>Quantity</td>
						<td>Date of Manufacture</td>
						<td>Expiry Date</td>
					</tr>
					<tr>
						<td><input type="text" name="medicine_id"></td>
						<td><input type="text" name="name"></td>
						<td><input type="text" name="type"></td>
						<td><input type="text" name="unit_price"></td>
						<td><input type="text" name="quantity"></td>
						<td><input type="Date" name="date_of_manufacture"></td>
						<td><input type="Date" name="expiry_date"></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="Date" name=""></td>
						<td><input type="Date" name=""></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="Date" name=""></td>
						<td><input type="Date" name=""></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="Date" name=""></td>
						<td><input type="Date" name=""></td>
					</tr>
					<tr>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="Date" name=""></td>
						<td><input type="Date" name=""></td>
					</tr>

			</table>
			<br><br><br><br><br>

			<input type="submit" name="submit" value="submit">
				<a href="index.html"><button>Home</button>
</a>

		</form>

	</body>
</html>