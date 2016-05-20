<?php

require 'dbclient.php';

class DBClientTest extends PHPUnit_Framework_TestCase
{

	private $dbclient;
	
	protected function setUp()
	{
		$this->dbclient = new DBClient();
	}
	
	protected function tearDown()
	{
		$this->dbclient = NULL;
	}
	
	public function testGetStation()
	{
		$result = $this->dbclient->getStation("Melbourne");
		$this->assertEquals("Melbourne",$result);
	}

}

?>