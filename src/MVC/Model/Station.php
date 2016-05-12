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
	 * Stores station's longitude
	 * @var float
	 */

	public $state;
	
	/**
	 * Stores station's state
	 * @var String
	 */

	public $isFavourite = FALSE;
	 
	public function __construct( $name, $state, $wmo, $dwo )
	{
		$this->name = $name;
		$this->state = $state;
		$this->wmo = $wmo;
		$this->dwo = $dwo;
	}
}
?>
