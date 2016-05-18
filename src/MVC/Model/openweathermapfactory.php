<?php
	include_once 'forecastfactory.php';
	include_once 'forecast.php';
	
	class OpenWeatherMapFactory extends ForecastFactory {

		public function getForecasts( $station )
		{

			$date;
			$weather;
			$maxTemp;
			$minTemp;
			$humidity;
			$pressure;
			$windSpd;
			$windDir;

			$forecasts;

			/* Hard coded API key for simplicity and security */
			$apikey = "ef4db6ef3edda785be9341e2cb88e1d4";
			
			$url = "https://api.openweathermap.org/api/2.5/daily?id=" . $station->wid .
						"&APIID=" + $apikey;
						
			$json = file_get_contents($url);
			$array = json_decode($json, true);

			foreach( $array['list'] as $data )
			{
				$date = date('Y-m-d', $data->dt);
				$weather = $data->weather->description;
				$maxTemp = $data->temp->max;
				$minTemp = $data->temp->min;
				$humidity = $data->humidity;
				$pressure = $data->pressure;
				$windSpd = $data->speed;
				$windDir = WindDirectionDegToCdl($data->deg);

				$forecasts[] = new Forecast( $date, $weather, $maxTemp, 
									$minTemp, $humidity, $pressure, $windSpd,
									$windDir );
			}

			return $forecasts;
		}
	}
?>
