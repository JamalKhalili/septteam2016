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
			
			$url = "http://api.openweathermap.org/data/2.5/forecast?id=" . $station->wid .
						"&appid=" . $apikey;
						
			$json = file_get_contents($url);
			$array = json_decode($json, true);

			foreach( $array['list'] as $data )
			{
				$date = $data['dt_txt'];
				$weather = $data['weather'][0]['main'];
				$maxTemp = $data['main']['temp_max'];
				$minTemp = $data['main']['temp_min'];
				$humidity = $data['main']['humidity'];
				$pressure = $data['main']['pressure'];
				$windSpd = $data['wind']['speed'];
				$windDir = $this->WindDirectionDegToCdl($data['wind']['deg']);

				$forecasts[] = new Forecast( $date, $weather, $maxTemp, 
									$minTemp, $humidity, $pressure, $windSpd,
									$windDir );
			}

			return $forecasts;
		}
	}
?>
