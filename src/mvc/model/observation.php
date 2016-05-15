<?php
/**
 * This is the measurment class that stores datas at certain time for a station
 * @author Jamal Khalili
 * @version 1.0.1 
 */
class Observation
{	
	/**
	 * Stores the date when measurement was taken
	 * @var String
	 */
	public $date;

	/**
	 * Stores the time when measurement was taken
	 * @var String
	 */
	public $time;

	/**
	 * Stores the temprature in celsius scale when measurement was taken
	 * @var float
	 */
	public $tempC;

	/**
	 * Stores the apparent temprature in celsius scale when measurement was taken
	 * @var float
	 */
	public $appTempC;

	/**
	 * Stores the dew point when measurement was taken
	 * @var float
	 */
	public $dewPointC;

	/**
	 * Stores the humidity percent when measurement was taken
	 * @var int
	 */
	public $relHumidity;

	/**
	 * Stores the Delta-T in celsius scale when measurement was taken
	 * @var float
	 */
	public $deltaTC;

	/**
	 * Stores the wind direction when measurement was taken
	 * @var String
	 */
	public $wDir;

	/**
	 * Stores the wind speed in km per hour when measurement was taken
	 * @var int
	 */
	public $wSpeedKMH;

	/**
	 * Stores the wind gust in km per hour when measurement was taken
	 * @var int
	 */
	public $wGustKMH;

	/**
	 * Stores the wind speed in KTS when measurement was taken
	 * @var int
	 */
	public $wSpeedKTS;

	/**
	 * Stores the wind gust in KTS when measurement was taken
	 * @var int
	 */
	public $wGustKTS;

	/**
	 * Stores the Press QNH hPa when measurement was taken
	 * @var float
	 */
	public $pressQNH;

	/**
	 * Stores the Press MSL hPa when measurement was taken
	 * @var float
	 */
	public $pressMSL;

	/**
	 * Stores the rain at 9am in mm when measurement was taken
	 * @var float
	 */
	public $rainAt9Am;

	/**
	 * Constructor.
	 * 
	 * It creates a new instance of Measurement class, with the passed paremeters.
	 * @param $date, $time, $tempC, $appTempC, $dewPointC, $relHumidity, $deltaTC, $wDir, 
				$wSpeedKMH, $wGustKMH, $wSpeedKTS, $wGustKTS, $pressQNH, $pressMSL, $rainAt9Am.
	 * @return void Returns nothing.
	 */
	public function __construct( $date, $time, $tempC, $appTempC, $dewPointC, $relHumidity, $deltaTC, $wDir, 
				$wSpeedKMH, $wGustKMH, $wSpeedKTS, $wGustKTS, $pressQNH, $pressMSL, $rainAt9Am )
	{
		$this->date = $date;
		$this->time = $time;
		$this->tempC = $tempC;
		$this->appTempC = $appTempC;
		$this->dewPointC = $dewPointC;
		$this->relHumidity = $relHumidity;
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
}
?>
