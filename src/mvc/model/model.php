<?php

	abstract class Model
	{
		abstract protected function addToFavourites( $name );

		abstract protected function removeFromFavourites( $name );

		abstract protected function getStations( $state );

		abstract protected function getStation( $name );

		abstract protected function getObservationData( $name );
		
		abstract protected function getDailyObservationData( $name, $months );
		
		abstract protected function getFavourites();
	}

?>
