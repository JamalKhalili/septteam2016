<?php include 'layoutTop.php';

echo '
	<h1  class="page-header">' . $this->station->name . '</h1>
	<a class="btn btn-info" href="index.php?page=stations&station=' . $this->station->name . '">Refresh Station</a>
	<a class="btn btn-info" href="index.php?page=Observations&station='. $this->station->name. '&add=' . $this->station->name . '">Add To Favourites</a>';
?>
<!-- <div  class="btn-group btn-group-justified" role="group">
	<button type="button" class="btn btn-default">Historical</button>  
	<button type="button" class="btn btn-default">Forcasts</button>
</div> -->
</br>


<div class="btn-group" role="group" aria-label="...">
  <button type="button" id="buttonH" class="btn btn-default">Historical</button>
  <!-- <button type="button" class="btn btn-default">Middle</button> -->
  <button type="button" id="buttonF" class="btn btn-default">Forcasts</button>
</div>
<br/>
<h5>Cick on the checkbox to add associated measurement to the graph!</h5>
<table class="table" id="stationF" style="display: none;">
		<tr class="measurments">
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
	</tr>
	<tr class="measurments">
		<th>Date</th>
		<th>Time</th>
		<th>Temperature in C</th>
		<th>Chance of Rain %</th>
		<th>Wind KMH</th>
		<th>Visibility</th>
		<th>Humidity %</th>
		<th>Pressure mb</th>
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
				</tr>';
		}
	?>
</table>

<table class="table" id="stationH">
	<tr class="measurments">
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>

		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>

		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
		<th><input type="checkbox" name="date"></th>
	</tr>
	<tr class="measurments">
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
