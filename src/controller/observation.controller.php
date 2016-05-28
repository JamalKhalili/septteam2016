<?php

	include 'controller.php';

	class ObservationController extends Controller
	{
		public function update();
		{
			$name = $_SESSION['station'];
			$data->station = $model.getStation( $name );
			$data->observations = $model.getObservationData( $name );

			if( $model->isFavourite( $station->name ) === TRUE )
			{
				$data->dailyObservations = $model.getDailyObservationData( $name, 3 );
			}
			
			$view.show( $data );
		}
	}

?>
