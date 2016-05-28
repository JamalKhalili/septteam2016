<?php
	include_once 'forecastfactory.php';
	include_once 'forecast.php';
	
	class ForecastIOFactory extends ForecastFactory {

		public function getForecasts( $station )
		{

			$time;
			$weather;
			$temp;
			$humidity;
			$pressure;
			$windSpd;
			$windDir;

			$forecasts;
			
			/* Hard coded API key for simplicity and security */
			$apikey = "8caba0fba7cb34297277e210b630ef7b";
			
			$url = "https://api.forecast.io/forecast/" . $apikey . "/" . 
					$station->lat . "," . $station->lon . "?units=si";
					
			$json = file_get_contents($url);
			$array = json_decode($json, true);

			foreach( $array['hourly']['data'] as $data )
			{
				$time = date('Y-m-d H:i:s', $data['time']);
				$weather = $data['summary'];
				$temp = $data['temperature'];
				$humidity = $data['humidity'];
				$pressure = $data['pressure'];
				$windSpd = $data['windSpeed'];
				$windDir = $this->WindDirectionDegToCdl($data['windBearing']);

				$forecasts[] = new Forecast( $time, $weather, $temp, $humidity, 
									$pressure, $windSpd, $windDir );
			}

			return $forecasts;
		}
	}
?>
