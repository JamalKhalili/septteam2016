<?php
	include_once 'forecastfactory.php';
	include_once 'forecast.php';
	
	class ForecastIOFactory extends ForecastFactory {

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
			$apikey = "8caba0fba7cb34297277e210b630ef7b";
			
			$url = "https://api.forecast.io/" . $apikey . "/" . 
					$station->lat . "," . $station->lon . "?units=si";
					
			$json = file_get_contents($url);
			$array = json_decode($json, true);

			foreach( $array['daily']['data'] as $data )
			{
				$date = date('Y-m-d', $data->time);
				$weather = $data->summary;
				$maxTemp = $data->temperatureMax;
				$minTemp = $data->temperatureMin;
				$humidity = $data->humidity;
				$pressure = $data->pressure;
				$windSpd = $data->windSpeed;
				$windDir = WindDirectionDegToCdl($data->windBearing);

				$forecasts[] = new Forecast( $date, $weather, $maxTemp, 
									$minTemp, $humidity, $pressure, $windSpd,
									$windDir );
			}

			return $forecasts;
		}
	}
?>
