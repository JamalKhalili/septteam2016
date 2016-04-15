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
									
			<table><tr><th>Favourite Weather Stations</th><th>Remove from Favourites</th></tr>
			<tr><th>
			<?php 

				echo '<a href="favourite.php">Name of Favourite</a>';

			?>
			</th>
			<th>Remove from Favourites Button</th></tr>
			</table>
			
		</div>
		
		<div id='footer'> 
			<?php include 'footer.php';?>
		</div>
		
	</body>
	
</html>