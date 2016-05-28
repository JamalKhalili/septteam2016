<?php

	include 'controller.php';
	/**
	 * This is the favourite controller class that handles updating the favourite stations
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	class FavouritesController extends Controller
	{
		/**
		 * Function to update the favourites
		 *
		 * It updates the favourites by calling getFavourites() from the model calss
		 * and then shows result to the view
		 * @return void
		 */
		public function update()
		{
			$this->data['favourites'] = $this->model->getFavourites();
			$this->view->show($this->data);
		}
	}
?>
