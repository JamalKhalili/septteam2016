<?php

	include 'view.php';

	/**
	 * This is obervation view class that handles shwoing obervations
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	class ObservationsView extends View
	{	
		/**
		 * A public variable that stores a station
		 * @var Station
		 */
		public $station;
		/**
		 * A public variable that stores obervations of a station
		 * @var Observation[]
		 */		
		public $observations;
		/**
		 * Constructor
		 */		
		public $dailyObservations;

		public function __construct()
		{
			$this->path = 'static/weatherstation.php';
		}
	
		public function show( $data )
		{
			if( $data['station']->isFavourite === TRUE )
			{
				$this->path = 'static/favourite.php';
			}

			parent::show( $data );
		}
	}
?>
