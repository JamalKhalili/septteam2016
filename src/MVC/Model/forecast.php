<?php

	class Forecast
	{
		public $time;
		public $weather;
		public $temp;
		public $humidity;
		public $pressure;
		public $windSpd;
		public $windDir;
		
		public function __construct( $time, $weather, $temp, $humidity, $pressure, $windSpd, $windDir )
		{
			$this->time = $time;
			$this->weather = $weather;
			$this->temp = $temp;
			$this->humidity = $humidity;
			$this->pressure = $pressure;
			$this->windSpd = $windSpd;
			$this->windDir = $windDir;
		}
	}

?>
