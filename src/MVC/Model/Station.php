<?php
/**
* This class stores a station data 
*/
class Station
{	
	/**
	 * Stores station's id
	 * @var String
	 */
	public $id;

	/**
	 * Stores station's name
	 * @var String
	 */
	public $name;

	/**
	 * Stores station's longtitude
	 * @var float
	 */
	public $longtitude;

	/**
	 * Stores station's latitude
	 * @var float
	 */
	public $latitude;

	/**
	 * Stores station's height
	 * @var float
	 */
	public $height;

	/**
	 * Stores an array of station's measurments
	 * @var Measurment []
	 */
	public $meausrments = array();

	/**
	 * Stores true if stations is listed favourite by the user, false otherwise
	 * @var bool
	 */
	public $isFavourite = false;

	/**
	 * Constructor.
	 * 
	 * It creates a new instance of this class, with the passed paremeters.
	 * @param $id, $name, $longtitude, $latitude, $height.
	 * @return void Returns nothing.
	 */
	public function Station($id, $name, $longtitude, $latitude, $height)
	{
		$this->id = $id;
		$this->name = $name;
		$this->longtitude = $longtitude;
		$this->latitude = $latitude;
		$this->height = $height;
	}

	/**
	 * Function to add a measurement to the station.
	 * 
	 * It adds the passed meausrement to the measurments array.
	 * @param Measurement $measurement It will be added to the array.
	 * @return void Returns nothing.
	 */
	public function addMeasurment($measuremnt){
		array_push($measuremnts, $measuremnt);
	}

	/**
	 * Function to graph temperatue history.
	 * 
	 * Only if the station is favourite, its meaurements are graphed.
	 * @return void Returns nothing.
	 */
	// graph station temperature history only if it is a favourite
	public function graphTempHistory(){
		if ($isFavourite == true){
			/////TODO: here goes code for graph
		}
	}
}
?>