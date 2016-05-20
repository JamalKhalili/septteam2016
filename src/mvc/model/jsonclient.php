<?php

	include 'observation.php';
	/**
	 * This is the json  client class that retrieves data from the BOM site
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	class JSONClient
	{
		/**
		 * Function to station's observations
		 *
		 * It requests station's observations by passing its name as parameter
		 * @param station Station to be created
		 * @return observations[] Array of observations
		 */
		public static function requestObservationData( $station )
		{
			$state;
			$observations;

			$currDate;
			$currTime;
		
			switch ( $station->state )
			{
				case 'VIC' :
					$state = 'IDV60801';
					break;
				case 'NSW' :
					$state = 'IDN60801';
					break;
				case 'WA' :
					$state = 'IDW60801';
					break;
				case 'SA' :
					$state = 'IDS60801';
					break;
				case 'NT' :
					$state = 'IDD60801';
					break;
				case 'QLD' :
					$state = 'IDQ60801';
					break;
				case 'TAS' :
					$state = 'IDT60801';
					break;
				case 'ANT' :
					$state = 'IDT60803';
					break;
			}
			
			$url = 'http://www.bom.gov.au/fwo/' . $state . '/' . $state . '.' .$station->wmo . '.json';
			$json = file_get_contents($url);
			$array = json_decode($json, true);

			foreach( $array['observations']['data'] as $data )
			{
				$currDate =  substr( $data['local_date_time_full'], 6 , 2) . '/' . 
					substr( $data['local_date_time_full'], 4 , 2) . '/' . 
					substr( $data['local_date_time_full'], 0, 4);
					
				$currTime = substr( $data['local_date_time'], -7 );
			
				$observations[] = new Observation( $currDate, $currTime, 
								$data['air_temp'], $data['apparent_t'],
								$data['dewpt'], $data['rel_hum'], $data['delta_t'], 
								$data['wind_dir'], $data['wind_spd_kmh'], $data['gust_kmh'],
								$data['wind_spd_kt'], $data['gust_kt'], $data['press_qnh'], 
								$data['press_msl'], $data['rain_trace']);
			}

			return $observations;
		}
	}

?>
