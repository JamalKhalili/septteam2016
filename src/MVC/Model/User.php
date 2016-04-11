<?php
namespace MVC;
use Controller/Controller;

/**
 * This is the user class that stores a user details.
 * @author Jamal Khalili
 * @version 1.0.1 
 */
class User
{	
	/**
	 * Stores user's name.
	 * @var String
	 */
	public $name;

	/**
	 * Stores an array of user's favourite stations.
	 * @var Station []
	 */
	private $favStations = array();


	/**
	 * Constructor.
	 * 
	 * It creates a new instance of User class, with the passed paremeters.
	 * @param String $name Stores user's name. 
	 * @return void Returns nothing.
	 */
	public function User($name){
		$this->name = $name;
	}

	/**
	 * Function to add a station to user's favourite stations.
	 * 
	 * It adds the passed station to the favStations array.
	 * @param Station $station Stores the favourite stations.
	 * @return void Returns nothing.
	 */
	public function addFavStation($station){
		array_push($favStations, $station);
	}

	/**
	 * Function to get all user's favourite stations
	 * 
	 * It returns favStations array
	 * @return Station [] Return user's favourite stations.
	 */
	public function getFavStations(){
		return $favStations;
	}
}
?>