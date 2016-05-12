<?php

	include 'model.php';
	include 'jsonclient.php';
	include 'dailyweatherclient.php';
	include 'dbclient.php';

	class WeatherSystem extends Model
	{
		private $db;

		public function __construct()
		{
			$this->db = new DBClient( 'database.csv' );
		}

		public function addToFavourites( $name )
		{
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
