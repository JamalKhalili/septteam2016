<?php
namespace MVC;

/**
 * This is the measurment class that stores datas at certain time for a station
 * @author Jamal Khalili
 * @version 1.0.1 
 */
class Measurement
{	
	/**
	 * Stores the date when measurement was taken
	 * @var String
	 */
	private $date;

	/**
	 * Stores the time when measurement was taken
	 * @var String
	 */
	private $time;

	/**
	 * Stores the temprature in celsius scale when measurement was taken
	 * @var float
	 */
	private $tempC;

	/**
	 * Stores the apparent temprature in celsius scale when measurement was taken
	 * @var float
	 */
	private $appTempC;

	/**
	 * Stores the dew point when measurement was taken
	 * @var float
	 */
	private $dewPointC;

	/**
	 * Stores the humidity percent when measurement was taken
	 * @var int
	 */
	private $relHumdity;

	/**
	 * Stores the Delta-T in celsius scale when measurement was taken
	 * @var float
	 */
	private $deltaTC;

	/**
	 * Stores the wind direction when measurement was taken
	 * @var String
	 */
	private $wDir;

	/**
	 * Stores the wind speed in km per hour when measurement was taken
	 * @var int
	 */
	private $wSpeedKMH;

	/**
	 * Stores the wind gust in km per hour when measurement was taken
	 * @var int
	 */
	private $wGustKMH;

	/**
	 * Stores the wind speed in KTS when measurement was taken
	 * @var int
	 */
	private $wSpeedKTS;

	/**
	 * Stores the wind gust in KTS when measurement was taken
	 * @var int
	 */
	private $wGustKTS;

	/**
	 * Stores the Press QNH hPa when measurement was taken
	 * @var float
	 */
	private $pressQNH;

	/**
	 * Stores the Press MSL hPa when measurement was taken
	 * @var float
	 */
	private $pressMSL;

	/**
	 * Stores the rain at 9am in mm when measurement was taken
	 * @var float
	 */
	private $rainAt9Am;

	//TODO: find out how to set these variables
	private $tempMax;
	private $tempMin;
	private $tempAt9Am;
	private $tempAt3Pm;

	/**
	 * Constructor.
	 * 
	 * It creates a new instance of Measurement class, with the passed paremeters.
	 * @param $date, $time, $tempC, $appTempC, $dewPointC, $relHumdity, $deltaTC, $wDir, 
				$wSpeedKMH, $wGustKMH, $wSpeedKTS, $wGustKTS, $pressQNH, $pressMSL, $rainAt9Am.
	 * @return void Returns nothing.
	 */
	public function Measurement($date, $time, $tempC, $appTempC, $dewPointC, $relHumdity, $deltaTC, $wDir, 
				$wSpeedKMH, $wGustKMH, $wSpeedKTS, $wGustKTS, $pressQNH, $pressMSL, $rainAt9Am)
	{
		$this->date = $date;
		$this->time = $time;
		$this->tempC = $tempC;
		$this->time = $time;
		$this->appTempC = $appTempC;
		$this->dewPointC = $dewPointC;
		$this->relHumdity = $relHumdity;
		$this->deltaTC = $deltaTC;
		$this->wDir = $wDir;
		$this->wSpeedKMH = $wSpeedKMH;
		$this->wGustKMH = $wGustKMH;
		$this->wSpeedKTS = $wSpeedKTS;
		$this->wGustKTS = $wGustKTS;
		$this->pressQNH = $pressQNH;
		$this->pressMSL = $pressMSL;
		$this->rainAt9Am = $rainAt9Am;
	}

	/**
	 * Function to get a specified property.
	 * 
	 * It is passed a certian property, then it returns its value.
	 * @param mixed $property Can be any variable.
	 * @return mixed Returns the value of the passed variable.
	 */
	function __get($property){
		if (property_exists($this, $property){
			return $this->$property;
		}
	}
}
?>