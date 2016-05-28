	<?php
		/* Strings representing the data points to be passed into
		the graphs */
		
		$s_Temp = "";
		$s_AppTemp = "";
		$s_DewPoint = "";
		$s_DeltaTC = "";
		$s_ForecastTemp = "";
		
		$s_Humidity = "";
		$s_Rain = "";	
		$s_ForecastHumd = "";
		
		$s_PressQNH = "";
		$s_PressMSL = "";
		$s_ForecastPress = "";
		
		$s_WindSpdKMH = "";
		$s_WindGustKMH = "";
		$s_WindSpdKTS = "";
		$s_WindGustKTS = "";
		$s_ForecastWindSpd = "";
		
		foreach($this->observations as $observation)
		{
			$time = strtotime($observation->date . " " . $observation->time);
			
			$s_Temp .= "{x: new Date(" . $time . "), y: " . $observation->tempC ."},\n";
			$s_AppTemp .= "{x: new Date(" . $time . "), y: " . $observation->appTempC ."},\n";
			$s_DewPoint .= "{x: new Date(" . $time . "), y: " . $observation->dewPointC ."},\n";
			$s_DeltaTC .= "{x: new Date(" . $time . "), y: " . $observation->deltaTC ."},\n";
			
			$s_Humidity .= "{x: new Date(" . $time . "), y: " . $observation->relHumidity ."},\n";
			$s_Rain .= "{x: new Date(" . $time . "), y: " . $observation->rainAt9Am ."},\n";
			
			$s_PressQNH .= "{x: new Date(" . $time . "), y: " . $observation->appTempC ."},\n";
			$s_PressMSL .= "{x: new Date(" . $time . "), y: " . $observation->appTempC ."},\n";
			
			$s_WindSpdKMH .= "{x: new Date(" . $time . "), y: " . $observation->appTempC ."},\n";
			$s_WindGustKMH .= "{x: new Date(" . $time . "), y: " . $observation->appTempC ."},\n";
			$s_WindSpdKTS .= "{x: new Date(" . $time . "), y: " . $observation->appTempC ."},\n";
			$s_WindGustKTS.= "{x: new Date(" . $time . "), y: " . $observation->appTempC ."},\n";
		}
		
		foreach($this->forecasts as $forecast)
		{
			$time = strtotime($forecast->time);
			
			$s_ForecastTemp .= "{x: new Date(" . $time . "), y: " . $forecast->temp ."},\n";
			$s_ForecastHumd .= "{x: new Date(" . $time . "), y: " . $forecast->humidity ."},\n";
			$s_ForecastPress .= "{x: new Date(" . $time . "), y: " . $forecast->pressure ."},\n";
			$s_ForecastWindSpd .= "{x: new Date(" . $time . "), y: " . $forecast->windSpd ."},\n";
		}
	?>

<script type='text/javascript'>
	var tempData = [
		{ 
			type: "line",
			lineThickness:3,
			// axisYType:"secondary",
			showInLegend: true,           
			name: "Temperature", 
			dataPoints: [
				<?php
					echo $s_Temp;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "App Temperature",
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_AppTemp;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Dew Point",        
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_DewPoint;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Delta TC",        
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_DeltaTC;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Forecast Temperature",        
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_ForecastTemp;
				?>
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
				<?php
					echo $s_Humidity;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Rain",
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_Rain;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Forecast Humidity",        
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_ForecastHumd;
				?>
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
				<?php
					echo $s_PressMSL;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Pressure QNH",
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_PressQNH;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "ForecastPressure",
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_ForecastPress;
				?>
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
				<?php
					echo $s_WindSpdKMH;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Guest",
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_WindGustKMH;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Speed K",
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_WindSpdKTS;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Guest K",
			// axisYType:"secondary",
			dataPoints: [
				<?php
					echo $s_WindGustKTS;
				?>
			]
		},
		{        
			type: "line",
			lineThickness:3,
			showInLegend: true,           
			name: "Forecast Speed",
			// axisYType:"secondary",
		dataPoints: [
				<?php
					echo $s_ForecastWindSpd;
				?>
			]
		}
	];
</script>