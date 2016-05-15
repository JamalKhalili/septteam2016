<?php
	include 'forecastfactory.php';
	
	OpenWeatherMapFactory extends ForecastFactory {

		abstract protected function getForecast( $station )
		{
		}
	}
?>
