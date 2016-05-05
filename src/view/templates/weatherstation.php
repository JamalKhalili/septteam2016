<?php include 'layoutTop.php';

echo '
	<h1  class="page-header">' . $this->station->name . '</h1>
	<a class="btn btn-info" href="index.php?page=stations&station=' . $this->station->name . '">Refresh Station</a>
	<a class="btn btn-info" href="index.php?page=Observations&station='. $this->station->name. '&add=' . $this->station->name . '">Add To Favourites</a>';
?>

<table class="table" id="station">

	<tr id="measurments">
		<th>Date</th>
		<th>Time</th>
		<th>Temp C</th>
		<th>App Temp C</th>
		<th>Dew Point C</th>
		<th>Rel Humd %</th>
		<th>Delta T C</th>
		<th>W. Dir</th>
		<th>W. Spd KMH</th>
		<th>W. Gst KMH</th>
		<th>W. Spd KTS</th>
		<th>W. Gst KTS</th>
		<th>Press QNH</th>
		<th>Press MSL</th>
		<th>Rain</th>
	</tr>

	<?php
		foreach ($this->observations as $observation) {
			echo 
				'<tr>
					<th>' . $observation->date . '</th>
					<th>' . $observation->time . '</th>
					<th>' . $observation->tempC . '</th>
					<th>' . $observation->appTempC . '</th>
					<th>' . $observation->dewPointC . '</th>
					<th>' . $observation->relHumidity . '</th>
					<th>' . $observation->deltaTC . '</th>
					<th>' . $observation->wDir . '</th>
					<th>' . $observation->wSpeedKMH . '</th>
					<th>' . $observation->wGustKMH . '</th>
					<th>' . $observation->wSpeedKTS . '</th>
					<th>' . $observation->wGustKTS . '</th>
					<th>' . $observation->pressQNH . '</th>
					<th>' . $observation->pressMSL . '</th>
					<th>' . $observation->rainAt9Am . '</th>
				</tr>';
		}
	?>
</table>

<?php include 'layoutBottom.php';?>
