<?php
/**
* CLass that stores user detals
*/
class User
{	
	public $name;
	private $favStations = array();

	// constructor
	public function User($name){
		$this->name = $name;
	}

	// function to add favourite stations
	public function addFavStation($station){
		array_push($favStations, $station);
	}

	// function to get user favourite stations
	public function getFavStations(){
		return $favStations;
	}
}
?>