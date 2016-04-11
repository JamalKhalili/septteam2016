<?php

namespace MVC;
use Model/Database;
use Model/Station;
use Model/User;

/**
 * This is a singlton class that controls the flow of the program
 * @author Jamal Khalili
 * @version 1.0.1 
 */
class Controller
{
	/**
	 * A static private variable of Controller class that cannot be instantiated.
	 * @var Controller
	 */
	private static $singltonInstance;

	/**
	 * A static private variable of the database
	 * @var Database
	 */
	private $database = Database::getInstance();

	/**
	 * A private array of stations
	 * @var Station[]
	 */
	private $stations = array();

	/**
	 * A private variable for a fixed user
	 * @var User
	 */
	private $user = new User("User"); //TODO: not sure whether we will have one or more users	

	/**
	 * Constructor.
	 * 
	 * It prevents from instaniating this class.
	 * @return void Returns nothing.
	 */
	private function __construct(){ }

	/**
	 * Function to get instance of the controller sigleton classs.
	 * 
	 * It creates a new singleton of the Controller class, otherwise it returns 
	 * the existant one if it is already created.
	 * @return Controller Returns a singlton class.
	 */
	public static function getInstance(){
		if (static::$singltonInstance === null){
			$singltonInstance = new Controller();
		}
		return static::$singltonInstance;
	}	

	/**
	 * Function to add stations.
	 * 
	 * It passes an array of stations and stores it in the stations array.
	 * @param Staion [] $stations Array of stations.
	 * @return void Returns nothing.
	 */
	public function addStations($stations){
		$this->stations = $stations;
	}

	/**
	 * Function to get stations.
	 * 
	 * It accesses the availabe stations and returns them to the calling class.
	 * @return Station [] Returns an array of stations.
	 */
	public function getStations(){
		retrun $stations;
	}

	/**
	 * Function to grefresh stations.
	 * 
	 * It emptys the stations array, then it calls refresStaions() on the databse
	 * class to refresh fill the local stations array with the updates stations.
	 * @return void Returns nothing.
	 */
	public function refreshStations(){
		$stations = array();
		$database->refreshStaions();
	}

	/**
	 * Function to add a station to the favourite list.
	 * 
	 * It passes a station, then it calls addFavStation on the user class to add
	 * the station into the user's favourite stations array.
	 * @param Staion $station A station to be set as favourite.
	 * @return void Returns nothing.
	 */
	public function setAsFavourite($station){
		$user::addFavStation($station);
	}

	/**
	 * Function to get user favourite stations.
	 * 
	 * It accesses user's favourite stations via calling getFavStatoin on the user 
	 * class, then gets all favourite stations.
	 * @return Station [] Returns an array of user's favourite stations.
	 */
	public function getFavStations(){
		return $user::getFavStations();
	}
}
?>