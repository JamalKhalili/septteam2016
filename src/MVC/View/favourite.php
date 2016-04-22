<?php include 'layoutTop.php';?>


<h1  class="page-header">Sydney</h1>
<button class="btn btn-info">Refresh Station</button>
<button class="btn btn-info">Remove From Favourites</button>

		
			
	<table class="table" id="station">
	<tr id="measurments">
		<th>Date</th>
		<th>Time</th>
		<th>Temp C</th>
		<th>App TEmp C</th>
		<th>Rel Humd %</th>
		<th>Delta T C</th>
		<th>W. Dir</th>
		<th>W. Spd KMH</th>
		<th>W. Gst KMH</th>
		<th>Press hPa</th>
		<th>Rain</th>
	</tr>
	<tr>
		<th>12/12/2015</th>
		<th>10:22:22</th>
		<th>33</th>
		<th>32</th>
		<th>20</th>
		<th>33</th>
		<th>32</th>
		<th>20</th>
		<th>33</th>
		<th>32</th>
		<th>20</th>
	</tr>
		<tr>
		<th>12/12/2015</th>
		<th>10:22:22</th>
		<th>33</th>
		<th>32</th>
		<th>20</th>
		<th>33</th>
		<th>32</th>
		<th>20</th>
		<th>33</th>
		<th>32</th>
		<th>20</th>
	</tr>	
		<tr>
		<th>12/12/2015</th>
		<th>10:22:22</th>
		<th>33</th>
		<th>32</th>
		<th>20</th>
		<th>33</th>
		<th>32</th>
		<th>20</th>
		<th>33</th>
		<th>32</th>
		<th>20</th>
	</tr>	
</table>
<hr/>
<h3>Temperature Graph</h3>
<br/>
<div id="visualization"></div>
<script type="text/javascript">
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
  var items = [
    {x: '2014-06-13', y: 30, group: 0},
    {x: '2014-06-14', y: 10, group: 0},
    {x: '2014-06-15', y: 15, group: 0},
    {x: '2014-06-16', y: 30, group: 0},


    {x: '2014-06-13', y: 35, group: 1},
    {x: '2014-06-14', y: 14, group: 1},
    {x: '2014-06-15', y: 13, group: 1},
    {x: '2014-06-16', y: 40, group: 1},


    {x: '2014-06-13', y: 20, group: 2},
    {x: '2014-06-14', y: 15, group: 2},
    {x: '2014-06-15', y: 15, group: 2},
    {x: '2014-06-16', y: 33, group: 2},


    {x: '2014-06-13', y: 39, group: 3},
    {x: '2014-06-14', y: 12, group: 3},
    {x: '2014-06-15', y: 10, group: 3},
    {x: '2014-06-16', y: 33, group: 3}
  ];

  var dataset = new vis.DataSet(items);
  var options = {
      legend: true,
      start: '2014-06-10',
      end: '2014-06-21'
  };
  var graph2d = new vis.Graph2d(container, dataset, groups, options);
</script>
		
		<!-- Taken from http://visjs.org/docs/graph2d/#Configuration_Options -->
<?php include 'layoutBottom.php';?>