<?php

	include 'model.php';
	include 'jsonclient.php';
	include 'dailyweatherclient.php';
	include 'dbclient.php';
	include 'forecastiofactory.php';
	include 'openweathermapfactory.php';

	/**
	 * This is the weather system controller class that handles the main functionalities
	 * of the system
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	class WeatherSystem extends Model
	{
		/**
		 * A private variable that stores Database client object.
		 * @var DBClient
		 */
		private $db;
		private $forecaster;
		/**
		 * Constructor
		 */
		public function __construct()
		{
			$this->db = new DBClient( 'database.csv' );
			
			if(isset($_COOKIE['forecaster']))
				$this->forecaster = $_COOKIE['forecaster'];
				
			else
				$this->forecaster = "forecast.io";
		}

		public function addToFavourites( $name )
		{
			if(!isset($_COOKIE['favourites']))
			{
				setcookie('favourites', $name);
				$_COOKIE['favourites'] = $name;
				return;
			}

			$favourites = explode(',', $_COOKIE['favourites']);
			
			if(!in_array( $name, $favourites ))
			{
				$favourites[] = $name;
			}
			
			setcookie('favourites', implode(',', $favourites));
			$_COOKIE['favourites'] = implode(',', $favourites);
		}


		public function removeFromFavourites( $name )
		{
			if(!isset($_COOKIE['favourites']))
			{
				return;
			}

			$newfav;
			$favourites = explode(',', $_COOKIE['favourites']);

			foreach($favourites as $value)
			{
				if(strcmp( $value, $name ) != 0)
				{
					$newfav[] = $value;
				}
			}

			if(isset($newfav))
			{
				setcookie('favourites', implode(',', $newfav));
				$_COOKIE['favourites'] = implode(',', $newfav);
				return;
			}

			setcookie( 'favourites', "" );
			$_COOKIE['favourites'] = "";
		}
		
		public function setForecaster( $forecaster )
		{
			setcookie('forecaster', $forecaster);
			$_COOKIE['forecaster'] = $forecaster;
			$this->forcaster = $forecaster;
		}

		public function getStations( $state )
		{
			$stations = $this->db->getStations( $state );

			foreach($stations as $station)
			{
				$this->setFavourite($station);
			}

			return $stations;
		}

		public function getStation( $name )
		{
			$station = $this->db->getStation( $name );
			$this->setFavourite( $station );
			return $station;
		}

		public function getObservationData( $name )
		{
			$station = $this->getStation( $name );
			return JSONClient::requestObservationData( $station );
		}
		
		public function getDailyObservationData( $name, $months )
		{
			$station = $this->getStation( $name );
			return DailyWeatherClient::requestObservationData( $station, 3 );
		}

		public function getForecasts( $name )
		{
			$forecastFactory;
			
			switch($this->forecaster)
			{
				case "forecast.io" :
					$forecastFactory = new ForecastIOFactory();
					break;
				case "openweathermap.org" :
					$forecastFactory = new OpenWeatherMapFactory();
					break;
			}
			
			$station = $this->getStation( $name );
			return $forecastFactory->GetForecasts( $station );
		}
		
		public function getForecaster()
		{
			return $this->forecaster;
		}

		public function getFavourites()
		{
			if(!isset($_COOKIE['favourites']))
			{
				return NULL;
			}

			$stations;
			$favourites = explode(',', $_COOKIE['favourites']);
			
			foreach( $favourites as $name )
			{
				$stations[] = $this->db->getStation( $name );
			}

			foreach($stations as $station)
			{
				$this->setFavourite($station);
			}

			return $stations;
		}

		private function setFavourite( &$station )
		{
			if(!isset($_COOKIE['favourites']))
			{
				$station->isFavourite = FALSE;
				return;
			}
		
			$favourites = explode(',', $_COOKIE['favourites']);
			
			if(in_array( $station->name, $favourites ))
			{
				$station->isFavourite = TRUE;
				return;
			}

			$station->isFavourite = FALSE;
		}
	}

?>
