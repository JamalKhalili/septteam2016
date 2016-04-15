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
		
			<h1>Weather Stations</h1>
			
			<h2>Refresh Button</h2>
						
			<table><tr><th>Weather Stations</th><th>Add to Favourites</th></tr>
			<tr><th>
			<?php 

				echo '<a href="weatherstation.php">Name of Weather Station</a>';

			?>
			</th>
			<th>Add to Favourites Button</th></tr>
			</table>
		</div>
		
		<div id='footer'> 
			<?php include 'footer.php';?>
		</div>
		
	</body>
	
</html>