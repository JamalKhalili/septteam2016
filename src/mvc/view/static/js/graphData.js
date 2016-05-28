var tempData = [
	{ 
		type: "line",
		lineThickness:3,
		// axisYType:"secondary",
		showInLegend: true,           
		name: "Temperature", 
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 0 },
			{ x: new Date(16,5,12,11,30,00,0), y: 1 },
			{ x: new Date(16,5,12,12,00,00,0), y: 1 },
			{ x: new Date(16,5,12,12,30,00,0), y: 5 },
			{ x: new Date(16,5,12,13,00,00,0), y: 5 },
			{ x: new Date(16,5,12,13,30,00,0), y: 5 },
			{ x: new Date(16,5,12,14,00,00,0), y: 10 },
			{ x: new Date(16,5,12,14,30,00,0), y: 14 },
			{ x: new Date(16,5,12,15,00,00,0), y: 20 },
			{ x: new Date(16,5,12,15,30,00,0), y: 20 },
			{ x: new Date(16,5,12,16,00,00,0), y: 21 },
			{ x: new Date(16,5,12,16,30,00,0), y: 30 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "App Temperature",
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 0 },
			{ x: new Date(16,5,12,11,30,00,0), y: 10 },
			{ x: new Date(16,5,12,12,00,00,0), y: 10},
			{ x: new Date(16,5,12,12,30,00,0), y: 13 },
			{ x: new Date(16,5,12,13,00,00,0), y: 15 },
			{ x: new Date(16,5,12,13,30,00,0), y: 15 },
			{ x: new Date(16,5,12,14,00,00,0), y: 16 },
			{ x: new Date(16,5,12,14,30,00,0), y: 19 },
			{ x: new Date(16,5,12,15,00,00,0), y: 22 },
			{ x: new Date(16,5,12,15,30,00,0), y: 26 },
			{ x: new Date(16,5,12,16,00,00,0), y: 28 },
			{ x: new Date(16,5,12,16,30,00,0), y: 35 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Dew Point",        
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 10 },
			{ x: new Date(16,5,12,11,30,00,0), y: 11 },
			{ x: new Date(16,5,12,12,00,00,0), y: 11},
			{ x: new Date(16,5,12,12,30,00,0), y: 15 },
			{ x: new Date(16,5,12,13,00,00,0), y: 15 },
			{ x: new Date(16,5,12,13,30,00,0), y: 25 },
			{ x: new Date(16,5,12,14,00,00,0), y: 10 },
			{ x: new Date(16,5,12,14,30,00,0), y: 14 },
			{ x: new Date(16,5,12,15,00,00,0), y: 30 },
			{ x: new Date(16,5,12,15,30,00,0), y: 23 },
			{ x: new Date(16,5,12,16,00,00,0), y: 32 },
			{ x: new Date(16,5,12,16,30,00,0), y: 43 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Delta TC",        
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 14 },
			{ x: new Date(16,5,12,11,30,00,0), y: 15 },
			{ x: new Date(16,5,12,12,00,00,0), y: 14},
			{ x: new Date(16,5,12,12,30,00,0), y: 14 },
			{ x: new Date(16,5,12,13,00,00,0), y: 15 },
			{ x: new Date(16,5,12,13,30,00,0), y: 25 },
			{ x: new Date(16,5,12,14,00,00,0), y: 14 },
			{ x: new Date(16,5,12,14,30,00,0), y: 15 },
			{ x: new Date(16,5,12,15,00,00,0), y: 37 },
			{ x: new Date(16,5,12,15,30,00,0), y: 33 },
			{ x: new Date(16,5,12,16,00,00,0), y: 42 },
			{ x: new Date(16,5,12,16,30,00,0), y: 23 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Forecast Temperature",        
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,17,00,00,0), y: 3 },
			{ x: new Date(16,5,12,17,30,00,0), y: 4 },
			{ x: new Date(16,5,12,18,00,00,0), y: 1},
			{ x: new Date(16,5,12,18,30,00,0), y: 5 },
			{ x: new Date(16,5,12,19,00,00,0), y: 5 },
			{ x: new Date(16,5,12,19,30,00,0), y: 2 },
			{ x: new Date(16,5,12,20,00,00,0), y: 10 },
			{ x: new Date(16,5,12,20,30,00,0), y: 14 },
			{ x: new Date(16,5,12,21,00,00,0), y: 20 },
			{ x: new Date(16,5,12,21,30,00,0), y: 23 },
			{ x: new Date(16,5,12,22,00,00,0), y: 42 },
			{ x: new Date(16,5,12,22,30,00,0), y: 41 }
		]
	}
];

var percData = [
	{        
		type: "line",
		lineThickness:3,
		// axisYType:"secondary",
		showInLegend: true,           
		name: "Humidity", 
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 0 },
			{ x: new Date(16,5,12,11,30,00,0), y: 1 },
			{ x: new Date(16,5,12,12,00,00,0), y: 1},
			{ x: new Date(16,5,12,12,30,00,0), y: 5 },
			{ x: new Date(16,5,12,13,00,00,0), y: 5 },
			{ x: new Date(16,5,12,13,30,00,0), y: 5 },
			{ x: new Date(16,5,12,14,00,00,0), y: 10 },
			{ x: new Date(16,5,12,14,30,00,0), y: 14 },
			{ x: new Date(16,5,12,15,00,00,0), y: 20 },
			{ x: new Date(16,5,12,15,30,00,0), y: 20 },
			{ x: new Date(16,5,12,16,00,00,0), y: 21 },
			{ x: new Date(16,5,12,16,30,00,0), y: 90 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Rain",
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 0 },
			{ x: new Date(16,5,12,11,30,00,0), y: 10 },
			{ x: new Date(16,5,12,12,00,00,0), y: 10},
			{ x: new Date(16,5,12,12,30,00,0), y: 13 },
			{ x: new Date(16,5,12,13,00,00,0), y: 15 },
			{ x: new Date(16,5,12,13,30,00,0), y: 15 },
			{ x: new Date(16,5,12,14,00,00,0), y: 16 },
			{ x: new Date(16,5,12,14,30,00,0), y: 19 },
			{ x: new Date(16,5,12,15,00,00,0), y: 22 },
			{ x: new Date(16,5,12,15,30,00,0), y: 26 },
			{ x: new Date(16,5,12,16,00,00,0), y: 28 },
			{ x: new Date(16,5,12,16,30,00,0), y: 35 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "F Chance of Rain",        
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,17,00,00,0), y: 3 },
			{ x: new Date(16,5,12,17,30,00,0), y: 4 },
			{ x: new Date(16,5,12,18,00,00,0), y: 1},
			{ x: new Date(16,5,12,18,30,00,0), y: 5 },
			{ x: new Date(16,5,12,19,00,00,0), y: 5 },
			{ x: new Date(16,5,12,19,30,00,0), y: 2 },
			{ x: new Date(16,5,12,20,00,00,0), y: 10 },
			{ x: new Date(16,5,12,20,30,00,0), y: 14 },
			{ x: new Date(16,5,12,21,00,00,0), y: 20 },
			{ x: new Date(16,5,12,21,30,00,0), y: 23 },
			{ x: new Date(16,5,12,22,00,00,0), y: 42 },
			{ x: new Date(16,5,12,22,30,00,0), y: 41 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Forecast Visibility",        
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,17,00,00,0), y: 13 },
			{ x: new Date(16,5,12,17,30,00,0), y: 14 },
			{ x: new Date(16,5,12,18,00,00,0), y: 11},
			{ x: new Date(16,5,12,18,30,00,0), y: 15 },
			{ x: new Date(16,5,12,19,00,00,0), y: 15 },
			{ x: new Date(16,5,12,19,30,00,0), y: 12 },
			{ x: new Date(16,5,12,20,00,00,0), y: 20 },
			{ x: new Date(16,5,12,20,30,00,0), y: 34 },
			{ x: new Date(16,5,12,21,00,00,0), y: 40 },
			{ x: new Date(16,5,12,21,30,00,0), y: 33 },
			{ x: new Date(16,5,12,22,00,00,0), y: 22 },
			{ x: new Date(16,5,12,22,30,00,0), y: 11 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Forecast Humidity",        
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,17,00,00,0), y: 23 },
			{ x: new Date(16,5,12,17,30,00,0), y: 42 },
			{ x: new Date(16,5,12,18,00,00,0), y: 21},
			{ x: new Date(16,5,12,18,30,00,0), y: 25 },
			{ x: new Date(16,5,12,19,00,00,0), y: 25 },
			{ x: new Date(16,5,12,19,30,00,0), y: 22 },
			{ x: new Date(16,5,12,20,00,00,0), y: 12 },
			{ x: new Date(16,5,12,20,30,00,0), y: 34 },
			{ x: new Date(16,5,12,21,00,00,0), y: 30 },
			{ x: new Date(16,5,12,21,30,00,0), y: 23 },
			{ x: new Date(16,5,12,22,00,00,0), y: 32 },
			{ x: new Date(16,5,12,22,30,00,0), y: 11 }
		]
	}
];

var pressData = [
	{        
		type: "line",
		lineThickness:3,
		// axisYType:"secondary",
		showInLegend: true,           
		name: "Pressure MSL", 
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 999 },
			{ x: new Date(16,5,12,11,30,00,0), y: 999 },
			{ x: new Date(16,5,12,12,00,00,0), y: 999},
			{ x: new Date(16,5,12,12,30,00,0), y: 999 },
			{ x: new Date(16,5,12,13,00,00,0), y: 999 },
			{ x: new Date(16,5,12,13,30,00,0), y: 998 },
			{ x: new Date(16,5,12,14,00,00,0), y: 1000 },
			{ x: new Date(16,5,12,14,30,00,0), y: 1001 },
			{ x: new Date(16,5,12,15,00,00,0), y: 999 },
			{ x: new Date(16,5,12,15,30,00,0), y: 992 },
			{ x: new Date(16,5,12,16,00,00,0), y: 1002 },
			{ x: new Date(16,5,12,16,30,00,0), y: 1010 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Pressure QNH",
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 999 },
			{ x: new Date(16,5,12,11,30,00,0), y: 1010 },
			{ x: new Date(16,5,12,12,00,00,0), y: 998},
			{ x: new Date(16,5,12,12,30,00,0), y: 1002 },
			{ x: new Date(16,5,12,13,00,00,0), y: 1010 },
			{ x: new Date(16,5,12,13,30,00,0), y: 1002 },
			{ x: new Date(16,5,12,14,00,00,0), y: 998 },
			{ x: new Date(16,5,12,14,30,00,0), y: 1002 },
			{ x: new Date(16,5,12,15,00,00,0), y: 1010 },
			{ x: new Date(16,5,12,15,30,00,0), y: 1002 },
			{ x: new Date(16,5,12,16,00,00,0), y: 1010 },
			{ x: new Date(16,5,12,16,30,00,0), y: 1002 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "ForecastPressure ",
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,17,00,00,0), y: 999 },
			{ x: new Date(16,5,12,17,30,00,0), y: 1010 },
			{ x: new Date(16,5,12,18,00,00,0), y: 999},
			{ x: new Date(16,5,12,18,30,00,0), y: 1010 },
			{ x: new Date(16,5,12,19,00,00,0), y: 999 },
			{ x: new Date(16,5,12,19,30,00,0), y: 1010 },
			{ x: new Date(16,5,12,20,00,00,0), y: 1010 },
			{ x: new Date(16,5,12,20,30,00,0), y: 999 },
			{ x: new Date(16,5,12,21,00,00,0), y: 1010 },
			{ x: new Date(16,5,12,21,30,00,0), y: 1010 },
			{ x: new Date(16,5,12,22,00,00,0), y: 1010 },
			{ x: new Date(16,5,12,22,30,00,0), y: 999 }
		]
	}
];

var wSpdData = [
	{        
		type: "line",
		lineThickness:3,
		// axisYType:"secondary",
		showInLegend: true,           
		name: "Speed", 
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 0 },
			{ x: new Date(16,5,12,11,30,00,0), y: 1 },
			{ x: new Date(16,5,12,12,00,00,0), y: 1},
			{ x: new Date(16,5,12,12,30,00,0), y: 5 },
			{ x: new Date(16,5,12,13,00,00,0), y: 5 },
			{ x: new Date(16,5,12,13,30,00,0), y: 5 },
			{ x: new Date(16,5,12,14,00,00,0), y: 10 },
			{ x: new Date(16,5,12,14,30,00,0), y: 14 },
			{ x: new Date(16,5,12,15,00,00,0), y: 20 },
			{ x: new Date(16,5,12,15,30,00,0), y: 20 },
			{ x: new Date(16,5,12,16,00,00,0), y: 21 },
			{ x: new Date(16,5,12,16,30,00,0), y: 90 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Gust",
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 0 },
			{ x: new Date(16,5,12,11,30,00,0), y: 10 },
			{ x: new Date(16,5,12,12,00,00,0), y: 10},
			{ x: new Date(16,5,12,12,30,00,0), y: 13 },
			{ x: new Date(16,5,12,13,00,00,0), y: 15 },
			{ x: new Date(16,5,12,13,30,00,0), y: 15 },
			{ x: new Date(16,5,12,14,00,00,0), y: 16 },
			{ x: new Date(16,5,12,14,30,00,0), y: 19 },
			{ x: new Date(16,5,12,15,00,00,0), y: 22 },
			{ x: new Date(16,5,12,15,30,00,0), y: 26 },
			{ x: new Date(16,5,12,16,00,00,0), y: 28 },
			{ x: new Date(16,5,12,16,30,00,0), y: 35 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Speed K",
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 0 },
			{ x: new Date(16,5,12,11,30,00,0), y: 10 },
			{ x: new Date(16,5,12,12,00,00,0), y: 10},
			{ x: new Date(16,5,12,12,30,00,0), y: 13 },
			{ x: new Date(16,5,12,13,00,00,0), y: 15 },
			{ x: new Date(16,5,12,13,30,00,0), y: 15 },
			{ x: new Date(16,5,12,14,00,00,0), y: 16 },
			{ x: new Date(16,5,12,14,30,00,0), y: 19 },
			{ x: new Date(16,5,12,15,00,00,0), y: 22 },
			{ x: new Date(16,5,12,15,30,00,0), y: 26 },
			{ x: new Date(16,5,12,16,00,00,0), y: 28 },
			{ x: new Date(16,5,12,16,30,00,0), y: 35 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Gust K",
		// axisYType:"secondary",
		dataPoints: [
			{ x: new Date(16,5,12,11,00,00,0), y: 0 },
			{ x: new Date(16,5,12,11,30,00,0), y: 10 },
			{ x: new Date(16,5,12,12,00,00,0), y: 10},
			{ x: new Date(16,5,12,12,30,00,0), y: 13 },
			{ x: new Date(16,5,12,13,00,00,0), y: 15 },
			{ x: new Date(16,5,12,13,30,00,0), y: 15 },
			{ x: new Date(16,5,12,14,00,00,0), y: 16 },
			{ x: new Date(16,5,12,14,30,00,0), y: 19 },
			{ x: new Date(16,5,12,15,00,00,0), y: 22 },
			{ x: new Date(16,5,12,15,30,00,0), y: 26 },
			{ x: new Date(16,5,12,16,00,00,0), y: 28 },
			{ x: new Date(16,5,12,16,30,00,0), y: 35 }
		]
	},
	{        
		type: "line",
		lineThickness:3,
		showInLegend: true,           
		name: "Forcast Speed",
		// axisYType:"secondary",
	dataPoints: [
			{ x: new Date(16,5,12,17,00,00,0), y: 19 },
			{ x: new Date(16,5,12,17,30,00,0), y: 10 },
			{ x: new Date(16,5,12,18,00,00,0), y: 29},
			{ x: new Date(16,5,12,18,30,00,0), y: 10 },
			{ x: new Date(16,5,12,19,00,00,0), y: 29 },
			{ x: new Date(16,5,12,19,30,00,0), y: 29 },
			{ x: new Date(16,5,12,20,00,00,0), y: 29 },
			{ x: new Date(16,5,12,20,30,00,0), y: 39 },
			{ x: new Date(16,5,12,21,00,00,0), y: 29 },
			{ x: new Date(16,5,12,21,30,00,0), y: 29 },
			{ x: new Date(16,5,12,22,00,00,0), y: 12 },
			{ x: new Date(16,5,12,22,30,00,0), y: 29 }
		]
	}
];