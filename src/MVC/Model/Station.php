<?php
/**
* This class stores a station data 
*/
class Station
{	
	// variables
	public $id;
	public $name;
	public $longtitude;
	public $latitude;
	public $height;
	public $meausrments = array();
	public $isFavourite = false;

	// constructor
	public function Station($id, $name, $longtitude, $latitude, $height)
	{
		$this->id = $id;
		$this->name = $name;
		$this->longtitude = $longtitude;
		$this->latitude = $latitude;
		$this->height = $height;
	}

	// add measuremtns
	public function addMeasurment($measuremnt){
		array_push($measuremnts, $measuremnt);
	}

	// graph station temperature history only if it is a favourite
	public function graphTempHistory(){
		if ($isFavourite == true){
			/////TODO: here goes code for graph
		}
	}
}
?>