<?php
/**
* This class stores a station data 
*/
class Station
{	
	/**
	 * Stores station's wmo number
	 * @var String
	 */
	public $wmo;
	
	/**
	 * Stores station's wmo number
	 * @var String
	 */
	public $dwo;

	/**
	 * Stores station's name
	 * @var String
	 */
	public $name;

	/**
	 * Stores station's state
	 * @var String
	 */
	 
	public $state;
	 
	 /**
	 * Stores station's latitude and longitude
	 * Used by ForecastIOFactory
	 * @var double
	 */
	 
	 
	public $lat;
	 
	public $lon;

	 
	 /**
	 * Stores station ID.  To be utilised by the OpenWeatherMapFactory.
	 * @var String
	 */

	 public $wid;


	public $isFavourite = FALSE;
	 
	public function __construct( $name, $state, $lat, $lon, $wmo, $dwo, $wid )
	{
		$this->name = $name;
		$this->state = $state;
		$this->lat = $lat;
		$this->lon = $lon;
		$this->wmo = $wmo;
		$this->dwo = $dwo;
		$this->wid = $wid;
	}
}
?>
