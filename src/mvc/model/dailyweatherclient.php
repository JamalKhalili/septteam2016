<?php
	include 'dailyobservation.php';

	class DailyWeatherClient
	{
		/*
			Get daily weather data from the bom website for
			certain number of months.
		*/
		
		public static function requestObservationData( $station, $months )
		{
			$observations = array();
			$observationMonth;

			$year;
			$month;
			$url;
			$file;
			
			$curr;
			$token;
			
			$date;
			$maxTemp;
			$minTemp;
			$tempAt9am;
			$tempAt3pm;
			
			for( $i = 0; $i < $months; $i++ )
			{
				$year = date_default_timezone_set('Y');
				
				$month = date_default_timezone_set('n') - $i;

				while( $month < 1 )
				{
					$month += 12;
					$year -= 1;
				}

				if( $month < 10)
				{
					$month = '0' . $month;
				}
			
				$url = 'http://www.bom.gov.au/climate/dwo/' . $year . $month . 
					'/text/IDCJDW' . $station->dwo . '.' . $year . $month . '.csv';
					
				$file = file_get_contents($url);

				if( $file === FALSE )
				{
					break;
				}

				/*
					Find the table headers
				*/

				$token = strtok( $file, "\n" );
				$curr = explode( ',', $token );

				while( strcmp( $curr[0], "" ) !== 0 )
				{
					$token = strtok( "\n" );
					$curr = explode( ',', $token );
				}

				$token = strtok( "\n" );

				while( $token !== FALSE )
				{
					$curr = explode( ',', $token );
					
					$date = $curr[1];
					$date = explode( '-', $date );

					if ($date[2] < 10)
						$date[2] = '0' . $date[2];

					$date = implode( '-', $date );
									
					$maxTemp = $curr[2];
					$minTemp = $curr[3];
					$tempAt9am = $curr[10];
					$tempAt3pm = $curr[16];

					if($maxTemp == NULL)
						$maxTemp = 0;
					if($minTemp == NULL)
						$minTemp = 0;
					if($tempAt9am == NULL)
						$tempAt9am = 0;
					if($tempAt3pm == NULL)
						$tempAt3pm = 0;

					$observationMonth[] = new DailyObservation( $date, $maxTemp, 
												$minTemp, $tempAt9am, $tempAt3pm );

					$token = strtok( "\n" );
				}

				foreach( array_reverse($observationMonth) as $value )
				{
					array_push( $observations, $value );
				}

				unset($observationMonth);
			}
			
			return $observations;	
		}
	}

?>
