<?php
	
	abstract class ForecastFactory {

		abstract protected function getForecasts( $station );

		/* Conversion of wind direction from degrees to cardinal units */
		public static function WindDirectionDegToCdl( $degrees )
		{
			$directions = array("N","NNE","NE","ENE","E","ESE","SE","SSE",
							"S","SSW","SW","WSW","W","WNW","NW","NNW");

			/* The index to the direction we want */
			$dir = (int)( (($degrees + (360/32)) % 360 ) / (360/16) );

			return $directions[$dir];
		}
	}
?>
