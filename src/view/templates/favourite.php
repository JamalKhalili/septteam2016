<?php include 'layoutTop.php';

echo '
	<h1  class="page-header">' . $this->station->name . '</h1>
	<a class="btn btn-info" href="index.php?page=Stations&station=' . $this->station->name . '">Refresh Station</a>
	<a class="btn btn-info" href="index.php?page=Observations&station=' . $this->station->name . '&remove=' . $this->station->name 
	. '">Remove From Favourites</a>';
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
<hr/>
<h3>Temperature Graph</h3>
<br/>
<div id="visualization"></div>
<?php
echo 
"<script type='text/javascript'>
	 // create a dataSet with groups
    var names = ['Min', 'Max', '9 AM', '3 PM'];
    var groups = new vis.DataSet();
        groups.add({
        id: 0,
        content: names[0],
        options: {
            drawPoints: {
                style: 'square' // square, circle
            },
            shaded: {
                orientation: 'bottom' // top, bottom
            }
        }});

    groups.add({
        id: 1,
        content: names[1],
        options: {
            style:'bar'
        }});

    groups.add({
        id: 2,
        content: names[2],
        options: {drawPoints: false}
    });

    groups.add({
        id: 3,
        content: names[3],
        options: {
            drawPoints: {
                style: 'circle' // square, circle
            },
            shaded: {
                orientation: 'top' // top, bottom
            }
        }});

  var container = document.getElementById('visualization');
  var items = [";

  $maxTemp = "";
  $minTemp = "";
  $tempAt9am = "";
  $tempAt3pm = "";

  $end = $this->dailyObservations[0]->date;

  foreach( $this->dailyObservations as $dailyObservation )
  {
    $maxTemp .= "{x: '" . $dailyObservation->date . "', y: " . $dailyObservation->maxTemp .", group: 0},\n";
    $minTemp .= "{x: '" . $dailyObservation->date . "', y: " . $dailyObservation->minTemp .", group: 1},\n";
    $tempAt9am .= "{x: '" . $dailyObservation->date . "', y: " . $dailyObservation->tempAt9am .", group: 2},\n";
    $tempAt3pm .= "{x: '" . $dailyObservation->date . "', y: " . $dailyObservation->tempAt3pm .", group: 3},\n";

    $start = $dailyObservation->date;
  }

  echo $maxTemp . "\n";
  echo $minTemp . "\n";
  echo $tempAt9am . "\n";
  echo $tempAt3pm . "\n";
  	
  echo "];

  var dataset = new vis.DataSet(items);
  var options = {
      legend: true,
      start: '" . $start ."',
      end: '" . $end ."'
  };
  var graph2d = new vis.Graph2d(container, dataset, groups, options);
</script>";
?>
			
<?php include 'layoutBottom.php';?>
