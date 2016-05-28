<?php 
	include 'static/layoutTop.php';
?>

<h1 class="page-header">Weather Stations</h1>

<table class="table">
	<tr >	
		<th id="header">Weather Stations</th>
	</tr>

	
	<?php 
		$states = array("NSW", "VIC", "QLD", "WA", "SA", "NT", "TAS", "ACT", "ANT");
	
		foreach ( $states as $state ) {
			echo
			'<tr><th>
				<a class="StationName"  href="index.php?page=Stations&state=' . $state . '">'
				 . $state . '</a>
			</th></tr>';
		} 
	?>
</table>

<?php include 'static/layoutBottom.php';?>
