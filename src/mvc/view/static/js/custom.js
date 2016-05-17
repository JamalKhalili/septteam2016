$(function (){
	$('button#buttonH').css('background-color', 'lightblue');

	// forecast button
	$('button#buttonF').click(function(){
		$('button#buttonH').css('background-color', 'white');
		$('button#buttonG').css('background-color', 'white');
		$(this).css('background-color', 'lightgray');
		$('div#graphs').hide();
		$('table#stationH').hide();
		$('div#sourceType').show(500);
		$('table#stationFF').show(1000);

		$('h5#guide')
		.text("Cilck on the plus symbol to add associated measurement to the graph!");
	});

	// history button
	$('button#buttonH').click(function(){
		$('button#buttonF').css('background-color', 'white');
		$('button#buttonG').css('background-color', 'white');
		$(this).css('background-color', 'lightblue');

		// hide grapghs
		$('div#graphs').hide();

		// hide forcast tables
		$('table#stationFO').hide();
		$('table#stationFF').hide();
		$('div#sourceType').hide();

		// show historical data table
		$('table#stationH').show(1000);

		$('h5#guide')
		.text("Cilck on the plus symbol to add associated measurement to the graph!");
	});

	// graph button
	$('button#buttonG').click(function(){

		$('button#buttonF').css('background-color', 'white');
		$('button#buttonH').css('background-color', 'white');

		$('h5#guide')
		.text("Please double cilck on the graph button to see the updated graphs!");

		$(this).css('background-color', 'wheat');

		$('table#stationFO').hide();
		$('table#stationFF').hide();
		$('div#sourceType').hide();

		$('table#stationH').hide();
		$('div#graphs').show(1000);

	});
	
	// handles selection of forecast information source
	$('input:radio').click(function() {

		// if forcast is checked, show forecast's table other wise openweatherma's
	   	if ($(this).val() == 'forecast') { 

	   		$('table#stationFO').hide();
			$('table#stationFF').show(1000);
		}
		else {

			$('table#stationFF').hide();
			$('table#stationFO').show(1000);
		}
	});


});

