<?php

	include 'view.php';

	/**
	 * This is obervation view class that handles showing staitons
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	class StationsView extends View
	{
		/**
		 * A public variable that stores a array of stations
		 * @var Station[]
		 */
		public $stations;
		/**
		 * Constructor
		 */
		public function __construct()
		{
			$this->path = 'templates/stations.php';
		}
	}
?>
