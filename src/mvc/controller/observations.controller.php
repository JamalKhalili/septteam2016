<?php

	include 'controller.php';
	/**
	 * This is the observations controller class that handles updating stations observations
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	class ObservationsController extends Controller
	{
		/**
		 * Function to update the observations
		 *
		 * It updates the observations by getting the requested station from the session
		 * and then shows result to the view
		 * @return void
		 */
		public function update()
		{
			$name = $_SESSION['station'];
			$this->data['station'] = $this->model->getStation( $name );
			$this->data['observations'] = $this->model->getObservationData( $name );

			if( $this->data['station']->isFavourite === TRUE )
			{
				$this->data['dailyObservations'] = $this->model->getDailyObservationData( $name, 3 );
			}
			
			$this->view->show( $this->data );

			$this->logger->lwrite("Show $name station's observations");
		}
	}

?>
