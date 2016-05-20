<?php

require 'weathersystem.php';

class WeatherSystemTests extends PHPUnit_Framework_TestCase
{

	private $weathersystem;
	
	protected function setUp()
	{
		$this->weathersystem = new weathersystem();
	}
	
	protected function tearDown()
	{
		$this->weathersystem = NULL;
	}
	
	public function testGetStation()
	{
		$result = $this->weathersystem->getStation("Melbourne");
		$this->assertEquals("Melbourne",$result);
	}
	
	public function testGetObservationData()
	{
		$result = $this->weathersystem->getObservationData("Melbourne");
		$this->assertEquals(JSONClient::requestObservationData("Melbourne"),$result);
	}
	
	public function testGetDailyObservationData()
	{
		$result = $this->weathersystem->getDailyObservationData("Melbourne",3);
		$this->assertEquals(DailyWeatherClient::requestObservationData("Melbourne",3),$result);
	}

}


?>