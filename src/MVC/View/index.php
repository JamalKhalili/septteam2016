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
			
			<p>Table of weather stations</p>
			
			<?php 

				echo '<a href="weatherstation.php">Link to Weather Station</a>';

			?>
			
		</div>
		
		<div id='footer'> 
			<?php include 'footer.php';?>
		</div>
		
	</body>
	
</html>