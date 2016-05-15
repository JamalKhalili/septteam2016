<?php include 'layoutTop.php';?>

<h1 class="page-header">Favourites</h1>	
<table class="table">
	<tr >	
		<th id8="header">Favourite Weather Stations</th>
	<tr>
	<?php
	if(isset($this->favourites))
	{
		foreach ($this->favourites as $station ) {
			echo '<tr><th>
				<a class="StationName" href="index.php?page=Observations&station=' . $station->name . '">' . $station->name . '</a>
			</th></tr>';
		} 
	}
	?>
</table>
	
<?php include 'layoutBottom.php';?>
