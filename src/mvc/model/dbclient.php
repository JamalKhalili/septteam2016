<?php
	include 'station.php';

	class DBClient
	{
	
		/**
		 * A public variable that stores the file to be used as databse
		 * @var File
		 */
		public $file;

		public function __construct( $file )
		{
			$this->file = $file;
		}

		public function getStation( $name )
		{
			$token;
			$station;
			$curr;

			/*
				Station member variables
			*/

			$sitename;
			$state;
			$lat;
			$lon;
			$wmo;
			$dwo;
			$wid;
		
			$data = file_get_contents( $this->file, true );

			/*
				Skip the table headers.
			*/

			$token = strtok( $data, "\n" );

			/*
				Grab first tuple in database.
			*/

			$token = strtok( "\n" );

			while( $token !== FALSE )
			{
				$curr = explode( ',', $token );
				$sitename = $curr[0];
			
				if( strcmp( $name, $sitename ) === 0 )
				{
					$state = $curr[1];
					$lat = $curr[2];
					$lon = $curr[3];
					$wmo = $curr[4];
					$dwo = $curr[5];
					$wid = substr( $curr[6], 0, -1 );
				
					$station = new Station( $sitename, $state, $lat, $lon, $wmo, $dwo, $wid);

					return $station;

				}

				else
				{
					$token = strtok( "\n" );
				}
			}
		}

		public function getStations()
		{

			$token;
			$stations;
			$curr;

			/*
				Station member variables
			*/

			$sitename;
			$state;
			$lat;
			$lon;
			$wmo;
			$dwo;
			$wid;
			
			$data = file_get_contents( $this->file, true );

			/*
				Skip the table headers.
			*/

			$token = strtok( $data, "\n" );

			/*
				Grab first tuple in database.
			*/

			$token = strtok( "\n" );

			while( $token !== FALSE )
			{
				$curr = explode( ',', $token );

				$name = $curr[0];
				$state = $curr[1];
				$lat = $curr[2];
				$lon = $curr[3];
				$wmo = $curr[4];
				$dwo = $curr[5];
				$wid = substr( $curr[6], 0, -1 );

				$stations[] = new Station( $name, $state, $lat, $lon, $wmo, $dwo, $wid);
				
				$token = strtok( "\n" );
			}

			return $stations;
		}
	}

?>
