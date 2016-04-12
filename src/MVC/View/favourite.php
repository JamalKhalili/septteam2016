<?php session_start();?>

<!DOCTYPE html>

<html>

	<head>
	
	<title>SEPT</title>
	
	<style type="text/css">
    	body, html {
      		font-family: sans-serif;
    	}
  	</style>

  	<script src="scripts/vis.js"></script>
  	<link href="styles/vis.css" rel="stylesheet" type="text/css" />

	
		<link rel="stylesheet" type="text/css" href="styles/style.css">
	
	</head>
	
	<body>
	
		<div id='navigation'> 
			<?php include 'menu.php';?>
		</div>
		
		<div id='main'>
		
			<h1>Name of Favourite Weather Station</h1>
			
			<h2>Refresh Button | Remove from Favourites Button</h2>
			
			<p>Details of favourite weather station...</p>
			
		</div>
		
		<div id="visualization"></div>

		<script type="text/javascript">
  			var container = document.getElementById('visualization');
  			var items = [
      			{x: '2014-06-11', y: 10},
      			{x: '2014-06-12', y: 25},
      			{x: '2014-06-13', y: 30},
      			{x: '2014-06-14', y: 10},
      			{x: '2014-06-15', y: 15},
      			{x: '2014-06-16', y: 30}
  			];

  			var dataset = new vis.DataSet(items);
  			var options = {
      			start: '2014-06-10',
      			end: '2014-06-18'
  			};
  			var Graph2d = new vis.Graph2d(container, dataset, options);
		</script>
		
		<!-- Taken from http://visjs.org/docs/graph2d/#Configuration_Options -->
		
		<div id='footer'> 
			<?php include 'footer.php';?>
		</div>
		
	</body>
	
</html>