<?php
/**
* A singlton class to control the flow of the program
*/
class Controller
{

	private static $singltonInstance;
	private $database = Database::getInstance();
	private $stations = array();
	private $user = new User("User"); // not sure whether we will have one or more users
	

	/*
	* Call this method to get singlton
	*/
	public static function getInstance(){
		if (static::$singltonInstance === null){
			$singltonInstance = new Controller();
		}
		return static::$singltonInstance;
	}	

	// a private controller to prevent any other classes from instantiating
	private function __construct(){ }

	// function to add stations to the array
	public function addStations($stations){
		$this->stations = $stations;
	}

	// function to return all stations stored in teh system
	public function getStations(){
		retrun $stations;
	}
	
	// function that refresh stations data by calling the refresh function on database class
	public function refreshStations(){
		$stations = array();
		$database->refreshStaions();
	}

	// function to add a station as user favourite 
	public function setAsFavourite($station){
		$user::addFavStation($station);
	}

	// function to get all user's favourite stations
	public function getFavStations(){
		return $user::getFavStations();
	}
}
?>