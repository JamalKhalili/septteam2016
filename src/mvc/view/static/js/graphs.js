
// add meausremnt name to the names array so it can graphed
var addedTempValues = [];
var addedPercValues = [];
var addedPressValues = [];
var addedWSpdValues = [];

$(function () {

	$("span.add").click(function(){
		// 
		// check which graph the value belongs to
		var names = $(this).attr('name').split('_');

		// check if it adds or removes a value to the graph
		if ($(this).hasClass('add')) {

			switch (names[0]) {

				case 'Temp':

					addedTempValues.push(tempData[parseInt(names[1])]);
					break;

				case 'Perc':
					addedPercValues.push(percData[parseInt(names[1])]);
					break;

				case 'Press':
					addedPressValues.push(pressData[parseInt(names[1])]);
					break;

				case 'Wnd':
					addedWSpdValues.push(wSpdData[parseInt(names[1])]);
					break;

				case 'Dir':
					wDirValues.push(names[1]);
					break;

				default:
					break;
			}
		 	
		  	$(this).attr('class','glyphicon glyphicon-ok remove');
			$(this).css('color', 'green');  
		}
		else {
			switch (names[0]) {

				case 'Temp':

					addedTempValues[parseInt(names[1])] = {};
					break;

				case 'Perc':
					percValues[parseInt(names[1])] = {};
					break;

				case 'Press':
					pressValues[parseInt(names[1])] = {};
					break;

				case 'Wnd':
					wSpdValues[parseInt(names[1])] = {};
					break;

				case 'Dir':
					wDirValues[parseInt(names[1])] = {} ;
					break;

				default:
					break;
			}
		 	
		  	$(this).attr('class','glyphicon glyphicon-plus add');
			$(this).css('color', '#333333');  
		}
	});
	// start rendering after clicking the graph button
	$('#buttonG').click( function() {

		// temperature graph
		var tempGraph = new CanvasJS.Chart("temperature", {

			zoomEnabled: true,

			animationEnabled: true,

			theme: "theme1",//theme1
			
			title:{
				text: "Temperature Graph"              
			},

			axisX:{
					title: "Time",
					interval: 30, 
	      			intervalType: "minute",        
				},

			axisY:{
					title: "Temperature in C",
			// 		valueFormatString:"0 C",
					
			// 		maximum: 50,
			// 		interval: 5,
			// 		interlacedColor: "#F5F5F5",
			// 		gridColor: "#D7D7D7",      
		 // 			tickColor: "#D7D7D7"								
			},

			toolTip:{ 
				shared: true
			},

			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center",
				fontSize: 15,
				fontFamily: "Lucida Sans Unicode"
			},
			
			// pre strored data
			data: addedTempValues,

			legend: {
	            cursor:"pointer",
	            itemclick : function(e) {
	              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
	              	e.dataSeries.visible = false;
	              }
	              else {
	                e.dataSeries.visible = true;
	              }
	              tempGraph.render();
	            }
	          }
			}
		);

		var percGraph = new CanvasJS.Chart("percentage", {
			theme: "theme1",//theme1
			title:{
				text: "Percentage Graph"              
			},
			zoomEnabled: true,

			animationEnabled: true,   // change to true

			axisX:{
				title: "Time",
				interval: 30, 
	  			intervalType: "minute",        
			},

			axisY:{
				title: "Percentage %",							
			},
			data: addedPercValues
		});

		var pressGraph = new CanvasJS.Chart("pressure", {

			title:{
				text: "Pressure Graph"              
			},
			zoomEnabled: true,

			animationEnabled: true,   // change to true

			axisX:{
				title: "Time",
				interval: 30, 
	  			intervalType: "minute",        
			},

			axisY:{
				title: "Pressure in mb",							
			},
			data: addedPressValues
		});

		var wSGraph = new CanvasJS.Chart("wSpeed", {
			theme: "theme1",//theme1
			title:{
				text: "Wind Graph"              
			},
			zoomEnabled: true,

			animationEnabled: true,   // change to true

			axisX:{
				title: "Time",
				interval: 30, 
	  			intervalType: "minute",        
			},

			axisY:{
				title: "Wind Speed in KMH",							
			},
			data: addedWSpdValues
		});

		
		var wDGraph = new CanvasJS.Chart("wDirection", {
			theme: "theme2",//theme1
			title:{
				text: "Basic Column Chart - CanvasJS"              
			},
			animationEnabled: false,   // change to true
			data: [              
			{
				// Change type to "bar", "area", "spline", "pie",etc.
				type: "column",
				dataPoints: [
					{ label: "apple",  y: 10  },
					{ label: "orange", y: 15  },
					{ label: "banana", y: 25  },
					{ label: "mango",  y: 30  },
					{ label: "grape",  y: 28  }
				]
			}
			]
		});

		tempGraph.render();
		percGraph.render();
		pressGraph.render();
		wSGraph.render();
		wDGraph.render();
	});
}); 