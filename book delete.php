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
					
				</div>
			</div> 
			<div class="main-body">
<?php
include "dbcon.php";
$var=$_GET["ID"];
$res=mysqli_query($con,"SELECT * FROM `details` WHERE `uid`='$var'");
$row=mysqli_fetch_array($res);
$url=$row["image"];
echo $url;
unlink('images/'.$url);
$result=mysqli_query($con,"DELETE FROM `details` WHERE `uid`='$var'");
header("location:book view.php");
?>
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