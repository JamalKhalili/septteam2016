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

		private $forecastFactory;

		/**
		 * Constructor
		 */
		public function __construct()
		{
			$this->db = new DBClient( 'database.csv' );
			
			if(!isset($_COOKIE['forecast']))
				$this->forecastFactory = new OpenWeatherMapFactory();
				return;

			switch($_COOKIE['forecast'])
			{
				case "forecast.io" : 
					$forecastFactory = new ForecastIOFactory();
					break;
				case "openweathermap.org" :
					$forecastFactory = new OpenWeatherMapFactory();
					break;
			}
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

		public function getStations()
		{
			$stations = $this->db->getStations();

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
			$station = $this->getStation( $name );
			return $this->forecastFactory->GetForecasts( $station );
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
