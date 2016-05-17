<?php
	
	class DailyObservation
	{
		/**
	 	* Stores station's name
	 	* @var String
	 	*/
		public $date;
			/**
	 	* Stores station's name
	 	* @var String
	 	*/
		public $maxTemp;
			/**
	 	* Stores station's name
		 * @var int
	 	*/
		public $minTemp;
			/**
		 * Stores station's name
		 * @var int
		 */
		public $tempAt9am;
			/**
		 * Stores station's name
		 * @var int
		 */
		public $tempAt3pm;
	
		public function __construct( $date, $maxTemp, $minTemp, $tempAt9am, $tempAt3pm )
		{
			$this->date = $date;
			$this->maxTemp = $maxTemp;
			$this->minTemp = $minTemp;
			$this->tempAt9am = $tempAt9am;
			$this->tempAt3pm = $tempAt3pm;
		}
	}

?>
