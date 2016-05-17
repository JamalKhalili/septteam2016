<?php include 'layoutTop.php';

echo '
	<h1  class="page-header">' . $this->station->name . '</h1>
	<a class="btn btn-info" href="index.php?page=Stations&station=' . $this->station->name . '">Refresh Station</a>
	<a class="btn btn-info" href="index.php?page=Observations&station=' . $this->station->name . '&remove=' . $this->station->name 
	. '">Remove From Favourites</a>';
?>
</br>
<div class="btn-group" role="group" aria-label="...">
  <button type="button" id="buttonH" class="btn btn-default">Historical Data</button>
  <!-- <button type="button" class="btn btn-default">Middle</button> -->
  <button type="button" id="buttonF" class="btn btn-default">Forecast Data</button>
  <button type="button" id="buttonG" class="btn btn-default">Graphs</button>
</div>

<div id="sourceType">
  <h5>Choose where you wish to obtain forecast information from:</h5>
  <input type="radio" name="source" value="forecast" checked> Forecast.io<br>
  <input type="radio" name="source" value="openweathermap"> OpenWeatherMap.org<br>
</div>

<h5 id="guide">Cilck on the plus symbol to add associated measurement to the graph!</h5>
<table class="table" id="stationFF" style="display: none;">

  <tr class="measurments">
    <th>Date</th>
    <th>Time</th>
    <th>Temperature in C<br><span class="glyphicon glyphicon-plus add" name="Temp_4"></span></th>
    <th>Chance of Rain %<br><span class="glyphicon glyphicon-plus add" name="Perc_2"></span></th>
    <th>Wind KMH <br><span class="glyphicon glyphicon-plus add" name="Wnd_4"></span></th>
    <th>Visibility <br><span class="glyphicon glyphicon-plus add" name="Perc_3"></span></th>
    <th>Humidity % <br><span class="glyphicon glyphicon-plus add" name="Perc_4"></span></th>
    <th>Pressure mb <br><span class="glyphicon glyphicon-plus add" name="Press_2"></span></th>
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

<table class="table" id="stationFO" style="display: none;">

  <tr class="measurments">
    <th>Date FO</th>
    <th>Time FO</th>
    <th>Temperature in C<br><span class="glyphicon glyphicon-plus add" name="Temp_4"></span></th>
    <th>Chance of Rain %<br><span class="glyphicon glyphicon-plus add" name="Perc_2"></span></th>
    <th>Wind KMH <br><span class="glyphicon glyphicon-plus add" name="Wnd_4"></span></th>
    <th>Visibility <br><span class="glyphicon glyphicon-plus add" name="Perc_3"></span></th>
    <th>Humidity % <br><span class="glyphicon glyphicon-plus add" name="Perc_4"></span></th>
    <th>Pressure mb <br><span class="glyphicon glyphicon-plus add" name="Press_2"></span></th>
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
		<th>Date</th>
		<th>Time</th>
		<th>Temp C <br><span class="glyphicon glyphicon-plus add" name="Temp_0"></span></th>
		<th>App Temp C <br><span class="glyphicon glyphicon-plus add" name="Temp_1"></span></th>
		<th>Dew Point C <br> <span class="glyphicon glyphicon-plus add" name="Temp_2"></span></th>
		<th>Rel Humd % <br> <span class="glyphicon glyphicon-plus add" name="Perc_0"></span></th>
		<th>Delta T C <br> <span class="glyphicon glyphicon-plus add" name="Temp_3"></span></th>
		<th>W. Dir </th><!-- <br> <span class="glyphicon glyphicon-plus add" name="Dir_WDir"></span></th> -->
		<th>W. Spd KMH <br> <span class="glyphicon glyphicon-plus add" name="Wnd_0"></span></th>
		<th>W. Gst KMH <br> <span class="glyphicon glyphicon-plus add" name="Wnd_1"></span></th>
		<th>W. Spd KTS <br> <span class="glyphicon glyphicon-plus add" name="Wnd_2"></span></th>
		<th>W. Gst KTS <br> <span class="glyphicon glyphicon-plus add" name="Wnd_3"></span></th>
		<th>Press QNH <br> <span class="glyphicon glyphicon-plus add" name="Press_0"></span></th>
		<th>Press MSL <br> <span class="glyphicon glyphicon-plus add" name="Press_1"></span></th>
		<th>Rain <br><br> <span class="glyphicon glyphicon-plus add" name="Perc_1"></span></th>
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
<div id="graphs" style="display: none;">
  <div class="graph-block">
    <h3>Temperature Graph <span class="glyphicon glyphicon-triangle-bottom" class="gragh-toggle"></span></h3>
    <br/>
    <div class="graph" id="temperature"></div>
    <hr/>
  </div>

  <div class="graph-block">
    <h3>Percentage Graph <span class="glyphicon glyphicon-triangle-bottom" class="gragh-toggle"></span></h3>
    <br/>
    <div class="graph" id="percentage"></div>
    <hr/>
  </div>

  <div class="graph-block">
    <h3>Pressure Graph <span class="glyphicon glyphicon-triangle-bottom" class="gragh-toggle"></span></h3>
    <br/>
    <div class="graph" id="pressure"></div>
    <hr/>
  </div>

  <div class="graph-block">
    <h3>Wind Speed Graph <span class="glyphicon glyphicon-triangle-bottom" class="gragh-toggle"></span></h3>
    <br/>
    <div class="graph" id="wSpeed"></div>
    <hr/>
  </div>

 <!--  <div class="graph-block">
    <h3>Wind Direction Graph <span class="glyphicon glyphicon-triangle-bottom" class="gragh-toggle"></span></h3>
    <br/>
    <div class="graph" id="wDirecti">
      <table class="table">
        <tr>
          <th>
            Date and Time
          </th>
          <th>
            Wind Direction
          </th>
        </tr>
        <tr>
          <th>
            2016/5/12 10:30:00 PM
          </th>
          <th>
            NE
          </th>
        </tr>
      </table>
    </div>
  </div> -->

<?php include 'layoutBottom.php';?>
