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
				<div class="menu1">
	
				
					<a class="logout" href="logout.php">LOG OUT</a>
				
			
				</div>
			</div> 
			<div class="main-body">
<?php

include 'dbcon.php';

   $id = $_GET["ID"];
   $sql = "SELECT * FROM `details` WHERE uid = $id ";
   $result = mysqli_query($con,$sql);

if(isset($_POST['submit']))
{
	$title=$_POST["title"];
	$author=$_POST["author"];
	$edition=$_POST["edition"];
	$publisher=$_POST["publisher"];
	$price=$_POST["price"];
	$i=$_FILES["img"]["name"];
	$imgurl=$_POST['img1'];
	$path=$_FILES['img']['tmp_name'];
	
	
	if($i=='')
	{
		 $sql = "UPDATE `details` SET `title`='$title',`author`='$author',`edition`='$edition',`publisher`='$publisher',`price`='$price',`image`='$i' WHERE uid= $id";
	}
	else
	{
		 unlink(realpath("images/".$_POST['img1']));
		 move_uploaded_file( $_FILES['img']['tmp_name'],"images/".$_FILES['img']['name']);
		 $sql = "UPDATE `details` SET `title`='$title',`author`='$author',`edition`='$edition',`publisher`='$publisher',`price`='$price',`image`='$i' WHERE uid= $id";
		
	}
   
	$r = mysqli_query($con,$sql);
	if($r==1)
	{
		
        header( "Location: book view.php" ); 
	}
	else
	{
		echo "not inserted ";
	}
	
}
?>


<html>
<head></head>
<body>
<center>


<form method="POST" action="#" class="table" enctype="multipart/form-data">
<?php
while($row = mysqli_fetch_array($result))
	{
		$imgg=$row["image"];
		?>  
<h1><center>Update</center></h1>		
						<center>
							<table class="edit1">
								<tr><td>TITLE:</td><td><input class="table" type="text" name="title" placeholder="title"></td></tr>
								<tr><td>AUTHOR:</td><td><input class="table" type="text" name="author" placeholder="author"></td></tr>
								<tr><td>EDITION</td><td><input class="table" type="text" name="edition" placeholder="edition"></td></tr>
								<tr><td>PUBLISHER</td><td><input class="table" type="text" name="publisher" placeholder="publisher"></td></tr>
								<tr><td>PRICE</td><td><input class="table" type="text" name="price" placeholder="price"></td></tr>
								<tr><td>Upload file</td><td><input type="file" name="img"></td>
  </tr>
								<tr><td><input type="SUBMIT" name="book_submit" id="SUBMIT"></td></tr>

							</table>
						</center>
					</form>
<?php 
  }

  
  ?>

</center>
</body>

</html>
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