<?php
	/**
	 * This is the main abstract class that controls adding and removing favourite stations
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	abstract class Controller
	{
		/**
		 * A public variable that stores Modle class.
		 * @var Model
		 */
		public $model;
		/**
		 * A public variable that stores View class.
		 * @var View
		 */
		public $view;

		/**
		 * A public variable that stores Database class.
		 * @var data
		 */
		private $data;
		
		public function __construct( $model, $view )
		{
			$this->model = $model;
			$this->view = $view;
		}
		/**
		 * Function to add a station to the favourites
		 * 
		 * It calls addToFvoutie() from the model passes the station to 
		 * be added as an argument
		 * @return void
		 */
		public function addToFavourites()
		{
			$this->model->addToFavourites( $_SESSION['add']);
			$this->update();
		}
		/**
		 * Function to remoce a station from the favourites
		 * 
		 * It calls removeFromFavourites() from the model passes the station
		 * to be removed as an argument
		 * @return void
		 */
		public function removeFromFavourites()
		{
			$this->model->removeFromFavourites( $_SESSION['remove']);
			$this->update();
		}
		
		/**
		 * Abstract function to update the page
		 *
		 * It updates the page when it's called
		 * @return void
		 */
		abstract protected function update();
	}

?>
