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
			$wmo;
			$dwo;
		
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
					$wmo = $curr[2];
					$dwo = substr( $curr[3], 0, -1 );
				
					$station = new Station( $sitename, $state, $wmo, $dwo );

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

			$name;
			$state;
			$wmo;
			$dwo;
			
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
				$wmo = $curr[2];
				$dwo = substr( $curr[3], 0, -1 );

				$stations[] = new Station( $name, $state, $wmo, $dwo );
				
				$token = strtok( "\n" );
			}

			return $stations;
		}
	}

?>
