<?php include 'layoutTop.php';

echo '
	<h1  class="page-header">' . $this->station->name . '</h1>
	<a class="btn btn-info" href="index.php?page=Observations&station=' . $this->station->name . '">Refresh Station</a>
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
	<button type="button" id="buttonF" class="btn btn-default">Forecasts</button>
</div>

<div id="sourceType">
	<?php
		echo '<h5> The following forecast information is powered by ' . $this->forecaster . '</h5>';
		
		echo '<a href="index.php?page=Observations&station=' . $this->station->name . 
					'&forecaster=' . other($this->forecaster) . '">Switch to ' . other($this->forecaster) . '</a>';
		
		function other( $forecastSource )
		{
			switch( $forecastSource )
			{
				case "forecast.io":
					return "openweathermap.org";
					break;
				case "openweathermap.org":
					return "forecast.io";
					break;
			}
		}
	?>
	
</div>

<table class="table" id="stationFF" style="display: none;">
	<tr class="measurments">
		<th>Date</th>
		<th>Weather</th>
		<th>Temperature in C</th>
		<th>Humidity %</th>
		<th>Pressure mb</th>
		<th>W. Spd KMH</th>
		<th>W. Dir</th>
	</tr>

	<?php
		foreach ($this->forecasts as $forecast) {
			echo 
				'<tr>
					<th>' . $forecast->time . '</th>
					<th>' . $forecast->weather . '</th>
					<th>' . $forecast->temp . '</th>
					<th>' . $forecast->humidity . '</th>
					<th>' . $forecast->pressure . '</th>
					<th>' . $forecast->windSpd . '</th>
					<th>' . $forecast->windDir . '</th>
				</tr>';
		}
	?>
</table>

<table class="table" id="stationH">
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
