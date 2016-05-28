<?php

	include 'view.php';

	class ObservationView extends View
	{	
		public $station;
		public $observations;
		public $dailyObservations;

		public function __construct()
		{
			$path = 'templates/weatherstation.php';
		}
	
		public function show( $data );
		{
			if( $model->isFavourite( $station->name ) === TRUE )
			{
				$path = 'templates/favourite.php'
			}

			parent::show( $data );
		}
	}
?>
