$(function (){
	$('button#buttonH').css('background-color', 'lightblue');

	// forecast button
	$('button#buttonF').click(function(){
		$('button#buttonH').css('background-color', 'white');
		$('button#buttonG').css('background-color', 'white');
		$(this).css('background-color', 'lightgray');
		$('div#graphs').hide();
		$('table#stationH').hide();
		$('table#stationF').show(1000);
	});

	// history button
	$('button#buttonH').click(function(){
		$('button#buttonF').css('background-color', 'white');
		$('button#buttonG').css('background-color', 'white');
		$(this).css('background-color', 'lightblue');
		$('div#graphs').hide();
		$('table#stationF').hide();
		$('table#stationH').show(1000);
	});

	// graph button
	$('button#buttonG').click(function(){

		$('button#buttonF').css('background-color', 'white');
		$('button#buttonH').css('background-color', 'white');

		$(this).parent().next().text("Please click again the graph button to see the updated graphs!");

		$(this).css('background-color', 'wheat');

		$('table#stationF').hide();
		$('table#stationH').hide();
		$('div#graphs').show(1000);

	});
	// create a dataSets with groups
    var tempGraph = [];
    var percGraph = [];
    var pressGraph = [];
    var wSpdGraph = [];
    var wDirGraph = [];

    // // get the reading and then adds it to its appropriate graph according to its name
    // $("span.add").click(function(){

    // 	var graphs = $(this).attr('name').split('_');
    // 	switch(graphs[0]) {
    // 		case 'Temp':
    // 			tempGraph.push(graphs[1]);
    // 			break;
    // 		case 'Perc':
    // 			percGraph.push(graphs[1]);
    // 			break;
    // 		case 'Press':
    // 			pressGraph.push(graphs[1]);
    // 			break;
    // 		case 'Wnd':
    // 			wSpdGraph.push(graphs[1]);
    // 			break;
    // 		case 'Dir':
    // 			wDirGraph.push(graphs[1]);
    // 			break;
    // 		default:
    // 			break;
    // 	}
	   //  $(this).attr('class','glyphicon glyphicon-ok');
	   //  $(this).css('color', 'green');  

    // });

});

// function changeColor(){
// 	if ($(this).css('background-color') == 'white'){
// 		$(this).css('background-color', 'lightblue');
// 	}
// 	else $(this).css('background-color', 'white');
// }

