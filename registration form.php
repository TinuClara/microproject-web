<html>
<head>
	<title>BOOKSHELF</title>
	<link rel="stylesheet" href="style.css"
</head>
<body class="body">
	<center>
		<h1 style="color:white">Bookshelf</h1>
		<table class="table">
			<form action=""method="POST" class="form">
				<div class="div1">
				
				             <h1 style="color:white">Create an account</h1>
							 
						<tr>
							<th>
								<td>
									Username
								</td>
									<td><input type="text" name="username" placeholder="Enter username" size="35"required></td>
							</th>
						</tr>
						<tr>
							<th>
								<td>
									Email
								</td>
										<td><input type="email" name="email" placeholder="Enter email"size="35" required></td>
							</th>
						</tr>
						<tr>
							<th>
								<td>
									Date of Birth
								</td>
										<td><input type="date" name="DOB" placeholder="Enter DOB" size="35"required></td>
							</th>
						</tr>
						<tr>
							<th>
								<td>
									Country
								</td>
										<td>
											<select >
												<option size="35">Choose</option>
												<option>India</option>
												<option>Sri lanka</option>
												<option>Nepal</option>
												<option>China</option>
												<option>Bhutan</option>
												<option>Myanmar</option>
											</select>
										</td>
							</th>
						</tr>
						<tr>
							<th>
								<td>
									Address
								</td>
										<td><input type="textarea" name="address" placeholder="Enter your address"size="35" required></td>
							</th>
						</tr>
						<tr>
							<th>
								<td>
									Password
								</td>
									<td><input type="password" name="password" placeholder="Enter password" size="35"required></td>
							</th>
						</tr>
						<tr>
							<th>
								<td>
									Confirm password
								</td>
									<td><input type="password" name="password" placeholder="Confirm password"size="35" required></td>
							</th>
						</tr>
						<tr>
							<th>
								<td>
								</td>
									<td><input style="background:green; font-size:25px"type="submit" name="SUBMIT" placeholder="SUBMIT" ></td>
							</th>
						</tr>
							<tr><td></td><td><a href="login.php">Already have an account</a></td></tr>
						
				</div>
			</form>
		</table>
	</center>
</body>
</html>