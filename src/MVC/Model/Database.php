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
	}
}
?>