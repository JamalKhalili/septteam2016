<?php

	include 'view.php';

	/**
	 * This is favourites view class that handles shwoing favourites
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	class FavouritesView extends View
	{
		/**
		 * A public variable that stores favourite stations
		 * @var Station[]
		 */
		public $favourites;

		/**
		 * Constructor
		 */
		public function __construct()
		{
			$this->path = 'static/favourites.php';
		}
	}
?>
