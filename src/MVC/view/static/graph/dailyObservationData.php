<script type='text/javascript'>
	 // // create a dataSet with groups
  //   var names = [];

  //   // add meausremnt name to the names array so it can graphed
  //   $("span.add").click(function(){
  //     names.push($(this).attr('name'));
  //     $(this).attr('class','glyphicon-plus ok').css('color', 'lighGreen');  
  //   };

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
  var items = [

  // add all data to graph
  
<?php
    
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
  	
?> ];

  var dataset = new vis.DataSet(items);
  var options = {
      legend: true,
      <?php
        echo "start: '" . $start ."',
        end: '" . $end;
      ?>
  };
  var graph2d = new vis.Graph2d(container, dataset, groups, options);
</script>