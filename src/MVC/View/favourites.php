<?php session_start();?>

<!DOCTYPE html>

<html>

	<head>
	
	<title>SEPT</title>
	
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	
	</head>
	
	<body>
	
		<div id='navigation'> 
			<?php include 'menu.php';?>
		</div>
		
		<div id='main'>
		
			<h1>Favourites</h1>
						
			<p>Table of favourite weather stations</p>
			
			<?php 

				echo '<a href="favourite.php">Link to Favourite</a>';

			?>
			
		</div>
		
		<div id='footer'> 
			<?php include 'footer.php';?>
		</div>
		
	</body>
	
</html>