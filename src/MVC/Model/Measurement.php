<?php
/**
* Class for the measurement that each station will have
*/
class Measurement
{	
	// variables
	private $date;
	private $time;
	private $tempC;
	private $appTempC;
	private $dewPointC;
	private $relHumdity;
	private $deltaTC;
	private $wDir;
	private $wSpeedKMH;
	private $wGuestKMH;
	private $wSpeedKTS;
	private $wGuestKTS;
	private $pressQNH;
	private $rainAt9Am;
	private $tempMax;
	private $tempMin;
	private $tempAt9Am;
	private $tempAt3Pm;

	// constructor
	public function Measurement($date, $time, $tempC, $appTempC, $dewPointC, $relHumdity, $deltaTC, $wDir, 
				$wSpeedKMH, $wGuestKMH, $wSpeedKTS, $wGuestKTS, $pressQNH, $rainAt9Am)
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
		$this->wGuestKMH = $wGuestKMH;
		$this->wSpeedKTS = $wSpeedKTS;
		$this->wGuestKTS = $wGuestKTS;
		$this->pressQNH = $pressQNH;
		$this->rainAt9Am = $rainAt9Am;
	}

	// accesss properties 
	function __get($property){
		if (property_exists($this, $property){
			return $this->$property;
		}
	}
}
?>