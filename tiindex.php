<?php

include 'dbcon.php';
if(isset($_POST['SUBMIT']))
{
	$name=$_POST['username'];
	$email=$_POST['email'];
	$dob=$_POST['DOB'];
	$country=$_POST['country'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	
	$sql="SELECT * FROM `user` WHERE email='$email'";                  
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	
	if($num > 0){
		echo '<script>alert("Email already exists")</script>';
	}
	else if($password !=$cpassword)
	{
		echo '<script>alert("Passwords do not match")</script>';
	}
	
	else
	{
		$insert="INSERT INTO `user`(`username`, `email`, `DOB`, `country`, `pssword`, `confirm password`)VALUES('$name','$email','$dob','$country','$password','$cpassword')";              
		mysqli_query($con,$insert);
		header("location:admin panel.php");
	}

}	
?>


<?php

include 'dbcon.php';
if(isset($_POST['login']))
{
	
	$email=$_POST['email'];
	$password=$_POST['password'];
  
  
	$sql="SELECT * FROM `user` WHERE email='$email' and pssword='$password'";                  
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	
	if($num> 0)                                     
	{
	 header("location:admin panel.php");
	 
	
	}
	else
	{
		echo '<script>alert("Invalid email and password")</script>';
	}
  
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bookshelf</title>
	<link rel="stylesheet" href="style.css">

   </head>
    
		<body class="index_body">
			<div class="header">
				<div class="logo">
					<a class="logo-text" href="index.php">Bookshelf</a>
				</div>
				<div class="menu">
					<form action="" method="POST">
						<table class="login-table">
						  <tr>
							<td class="login-label">
								Email
							</td>
							<td class="login-label">
								Password
							</td>
						  </tr>
						  <tr>
							<td>
								<input type="text" name="email" placeholder="Enter your email" required>
							</td>
							<td>
								<input type="password" name="password" placeholder="Enter your password"required>
							</td>
							<td>
								<input style="background:green"type="submit" name="login" value="Login">
							</td>
						  </tr>
						</table>
					</form>
				</div>
			</div> 
			<div class="main-body">
			
				<div class="left">
					<p class="description">Bookshelf helps you to get into the world of books...</p>
					<img class="img" src="girl with book.jpg">
				</div>
				<div class="right">
					<center>
					<h1>Create an account</h1>
					<form action="" method="POST">
					
						<input class="reg-form" type="text" name="username" placeholder="Enter username" required><br><br>
					    <input class="reg-form" type="email" name="email" placeholder="Enter email" required></td><br><br>
						<input class="reg-form" type="date" name="DOB" placeholder="Enter DOB" required></td><br><br>
						<select class="reg-form" name="country">
								<option class="reg-form">Country</option>
								<option class="reg-form">India</option>
								<option class="reg-form">Sri lanka</option>
								<option class="reg-form">Nepal</option>
								<option class="reg-form">China</option>
								<option class="reg-form">Bhutan</option>
								<option class="reg-form">Myanmar</option>
						</select ><br><br>
						
						<input class="reg-form" type="password" name="password" placeholder="Enter password" required><br><br>
						<input class="reg-form" type="password" name="cpassword" placeholder="Confirm password" required><br><br>
						
							<input class="reg-submit"type="submit" name="SUBMIT" value="SUBMIT" >
					</center>
					</form>
				</div>
			</div>
			<div class="footer">
				<div class="footer-left">
					<p class="footer-connect">Connect with us</p>
					<a href="https://www.twitter.com"><img class="connect-with-us"  src="twitter.png"></a>
					<a href="https://www.facebook.com"><img class="connect-with-us"= src="facebook.png"></a>
					<a href="https://www.instagram.com"><img class="connect-with-us"  src="insta.jpg"></a>
				</div>
				<div class="footer-middle">
					<p class="footer-bookshelf">Bookshelf</p>
				</div>
		
			</div>
		</body>
</html>