<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'] . '/sept/src/mvc/model/Logger.php';
	include 'model.php';
	include 'jsonclient.php';
	include 'dailyweatherclient.php';
	include 'dbclient.php';


	class WeatherSystem extends Model
	{
		private $db;

		/**
		 * @var logger logs user actions in a file
		 */
		public $logger;

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
				return;
			}

			$favourites = explode(',', $_COOKIE['favourites']);
			
			if(!in_array( $name, $favourites ))
			{
				$favourites[] = $name;
			}


			setcookie('favourites', implode(',', $favourites));

			
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
				if(strcmp( $value, $name ) !== 0)
				{
					$newfav[] = $value;
				}
			}

			if(isset($newfav))
			{
				setcookie('favourites', implode(',', $newfav));
				return;
			}

			unset($_COOKIE['favourites']);

			
		}

		public function getStations()
		{
			$stations = $this->db->getStations();

			foreach($stations as $station)
			{
				$this->setFavourite($station);
			}

			$this->logger->lwrite("Show weather stations");

			return $stations;
		}

		public function getStation( $name )
		{
			// $station = $this->db->getStation( $name );
			$this->setFavourite( $station );

			$this->logger->lwrite("Show $name station");

			return $station;
		}

		public function getObservationData( $name )
		{
			$station = $this->getStation( $name );

			$this->logger->lwrite("Show $name station's observation data");

			return JSONClient::requestObservationData( $station );
		}
		
		public function getDailyObservationData( $name, $months )
		{
			$station = $this->getStation( $name );
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

			$this->logger->lwrite("Show favourite weather stations");

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
