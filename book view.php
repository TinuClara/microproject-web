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
				
					<a class="logout" href="logout.php">LOG OUT</a>
				
			</div> 
			<div class="main-body">
<?php	
include 'dbcon.php';
?>
<html>
<h1 class="details">BOOK DETAILS</h1>
<table class="table">
<tr class="table_head">

<td>TITLE</td>
<td>AUTHOR</td>
<td>EDITION</td>
<td>PUBLISHER</td>
<td>PRICE</td>
<td>IMAGE</td>
<td>EDIT</td>
<td>DELETE</td>
</tr>
<?php
$result=mysqli_query($con,"SELECT * FROM `details`");
//print_r($result)
while($row=mysqli_fetch_array($result))
{?>
   <tr class="table_body" >
   
   <td><?php echo $row["title"];?></td>
   <td><?php echo $row["author"];?></td>
   <td><?php echo $row["edition"];?></td>
   <td><?php echo $row["publisher"];?></td>
   <td><?php echo $row["price"];?></td>
   <td><img src="images/<?php echo $row["image"];?>"width="50px" "height="50px"/>
   <td ><a class="edit"href="edit.php?ID=<?php echo $row["uid"]; ?>">update</a></td>
   <td ><a class="del" href="book delete.php?ID=<?php echo $row["uid"]; ?>">remove</a></td>
   </tr>
<?php }
 ?>
 

</table>
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
</html>