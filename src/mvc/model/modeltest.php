<?php
	include '../model/weathersystem.php';

	$model = new WeatherSystem();
	
//	$stations = $model->getStations();
//	var_dump( $stations );
//	echo "\n\n";

//	$station = $model->getStation( 'Darwin Airport' );
//	var_dump( $station );
//	echo "\n\n";

//	$observations = $model->getObservationData( 'Melbourne Olympic Park' );
//	var_dump( $observations );
//	echo "\n\n";

	unset( $_COOKIE['favourites'] );

	$model->addToFavourites( 'Melbourne' );
	var_dump( $_COOKIE['favourites'] );
?>
