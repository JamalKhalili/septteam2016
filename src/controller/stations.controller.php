<?php

	include 'controller.php';
	/**
	 * This is the stations controller class that handles updating stations
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	class StationsController extends Controller
	{
		/**
		 * Function to update the stations
		 *
		 * It updates the stations by calling getStations() from the model calss
		 * and then shows result to the view
		 * @return void
		 */
		public function update()
		{
			$this->data['stations'] = $this->model->getStations();
			$this->view->show($this->data);
		}
	}
	
?>
