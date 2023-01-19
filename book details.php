
<?php
include 'dbcon.php';
if(isset($_POST["book_submit"])){
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publisher=$_POST["publisher"];
$price=$_POST["price"];
$i=$_FILES["img"]["name"];
echo $i;
$j=$_FILES["img"]["type"];
$k=$_FILES["img"]["size"];
$l=$_FILES["img"]["tmp_name"];

$dst="./image/".$i;
$dst_db="image/".$i;
move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$_FILES["img"]["name"]);


$sql="INSERT INTO `details`(`title`, `author`, `edition`,`publisher`, `price`,`image`)VALUES('$title','$author','$edition','$publisher','$price','$i')";

$r=mysqli_query($con,$sql);
if($r)
{
 header("location:book view.php");
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
				<div class="menu1">
					
				
					<a class="logout" href="logout.php">LOG OUT</a>
				
	
				</div>
			</div> 
			<div class="main-body">
			
				<div class="left">
					<h1 class="heading">ADD BOOKS</h1>
					<form method="POST" action="#"  enctype="multipart/form-data">
						
							<table>
								<tr><td>TITLE:</td><td><input class="table" type="text" name="title" placeholder="title"></td></tr>
								<tr><td>AUTHOR:</td><td><input class="table" type="text" name="author" placeholder="author"></td></tr>
								<tr><td>EDITION</td><td><input class="table" type="text" name="edition" placeholder="edition"></td></tr>
								<tr><td>PUBLISHER</td><td><input class="table" type="text" name="publisher" placeholder="publisher"></td></tr>
								<tr><td>PRICE</td><td><input class="table" type="text" name="price" placeholder="price"></td></tr>
								<tr><td>Upload file</td><td><input type="file" name="img"></td>
  </tr>
								<tr><td><input type="SUBMIT" name="book_submit" id="SUBMIT"></td></tr>

							</table>
						
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


<div>
</html>