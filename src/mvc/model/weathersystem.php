<?php

	include 'model.php';
	include 'jsonclient.php';
	include 'dailyweatherclient.php';
	include 'dbclient.php';
	require_once 'Logger.php';

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

		/**
		 * @var logger logs user actions in a file
		 */
		public $logger;

		/**
		 * Constructor
		 */
		public function __construct()
		{
			$this->db = new DBClient( 'database.csv' );
			$this->logger = new Logger ();
		}

		public function addToFavourites( $name )
		{
			$this->logger->lwrite("Add $name station to favourites");

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
			$this->logger->lwrite("Remove $name station from favourites");

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

			$this->logger->lwrite("Retrieve weather stations");

			return $stations;
		}

		public function getStation( $name )
		{
			$station = $this->db->getStation( $name );
			$this->setFavourite( $station );

			$this->logger->lwrite("Retrieve a weather station");

			return $station;
		}

		public function getObservationData( $name )
		{
			$station = $this->getStation( $name );

			$this->logger->lwrite("Retrieve $name station's observation data");

			return JSONClient::requestObservationData( $station );
		}
		
		public function getDailyObservationData( $name, $months )
		{
			$station = $this->getStation( $name );

			$this->logger->lwrite("Retrieve $name station's daily observation data ");

			return DailyWeatherClient::requestObservationData( $station, 3 );
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

			$this->logger->lwrite("Retrieve favourite weather stations");

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
