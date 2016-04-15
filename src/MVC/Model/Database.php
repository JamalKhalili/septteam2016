<?php

namespace MVC;
use Controller/Controller;

/**
 * This is the database class that gets data from the BOM site.
 * @author Jamal Khalili
 * @version 1.0.1 
 */
class Database
{
	/**
	 * A static private variable of Database class that cannot be instantiated.
	 * @var Database
	 */
	private static $singltonInstance;

	/**
	 * A static private variable of Controller class.
	 * @var Controller
	 */
	private $controller = Controller::getInstance();

	/**
	 * Constructor.
	 * 
	 * It prevents from instaniating this class.
	 * @return void Returns nothing.
	 */
	private function __construct(){ }

	/**
	 * Function to get instance of the databse sigleton classs.
	 * 
	 * It creates a new singleton of the databse class, otherwise it returns 
	 * the existant one if it is already created.
	 * @return Databse Returns a singlton class.
	 */
	public static function getInstance(){
		if (static::$singltonInstance === null){
			$singltonInstance = new Database();
			refreshStations(); // populate stations once database class is called
		}
		return static::$singltonInstance;
	}	

	/**
	 * Function to refresh stations.
	 * 
	 * It gets data from the BOM site using json, and then populates the stations
	 * array on the controller class with the updates stations.
	 * @return void Returns nothing.
	 */
	public function refreshStations(){
		//TODO: here goes the code for json

		return createMockStations();
	}

	// Mock objects
	function createMockStations(){

		// stations
		$station0 = new Station("0", "Melbourne", "522.3", "333.4", "324");
		$station1 = new Station("1", "Sydney", "152.3", "333.4", "190");
		$station2 = new Station("2", "Perth", "622.3", "333.4", "120");
		$station3 = new Station("3", "Gold Coast", "901.3", "932.1", "220");

		$stations = array($station0, $station1, $station2, $station3);

		// mesurements
		$measurement0 = new Measurement("9/2/2016" ,"4:20:11", "8", "3", "23", "34", "43", "NE",
										"50", "43", "43", "83", "4", "3", "9");
		$measurement1 = new Measurement("20/12/2015" ,"10:10:13", "23", "20", "39", "34", "45", "SW",
										"40", "32", "24", "20", "1", "2", "8");

		foreach ($stations as $station) {
			$station.addMeasurement($measurement0);
			$station.addMeasurement($measurement1);
		}

		return $stations;
	}


}
?>