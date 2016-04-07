<?php
/**
* This is the databse class that gets data from the BOM site
*/
class Database
{
	private static $singltonInstance;
	private $controller = Controller::getInstance();

	/*
	* Call this method to get singlton
	*/
	public static function getInstance(){
		if (static::$singltonInstance === null){
			$singltonInstance = new Database();
			refreshStations(); // populate stations once database class is called
		}
		return static::$singltonInstance;
	}	

	// a private controller to prevent any other classes from instantiating
	private function __construct(){ }

	

	// function to get the data from the BOM site using json, and populate the "stations" array in the
	// Controller calls with these data
	public function refreshStations(){
		/////TODO: here goes the code for json
	}
}
?>