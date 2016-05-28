<?php 
	include 'layoutTop.php';
?>

<h1 class="page-header">Weather Stations</h1>
<a class="btn btn-info" href="index.php">Refresh Station</a>

<table class="table">
	<tr >	
		<th id="header">Weather Stations</th>
	</tr>

	
	<?php foreach ( $this->stations as $station ) {
		echo
		'<tr><th>
			<a class="StationName"  href="index.php?page=Observations&station=' . $station->name . '">'
			 . $station->name . '</a>
		</th></tr>';
	} 
	?>
</table>

<?php include 'layoutBottom.php';?>
