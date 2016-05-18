<?php

	class Forecast
	{
		public $date;
		public $weather;
		public $maxTemp;
		public $minTemp;
		public $humidity;
		public $pressure;
		public $windSpd;
		public $windDir;
		
		public function __construct( $date, $weather, $maxTemp, $minTemp, $humidity, $pressure, $windSpd, $windDir )
		{
			$this->date = $date;
			$this->weather = $weather;
			$this->maxTemp = $maxTemp;
			$this->minTemp = $minTemp;
			$this->humidity = $humidity;
			$this->pressure = $pressure;
			$this->windSpd = $windSpd;
			$this->windDir = $windDir;
		}
	}

?>
