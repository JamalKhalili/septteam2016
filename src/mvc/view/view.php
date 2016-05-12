<?php

	/**
	 * This is an abstract class of the view that handles shwoing data to the user
	 * @author Alec Goodsell
	 * @version 1.0.1 
	 */
	abstract class View
	{
		/**
		 * A public variable that stores path to a station
		 * @var String
		 */
		public $path;

		/**
		 * Public function to show data to the user
		 *
		 * It takes data object as a paremeter
		 * @param  data Array of objects
		 * @return void
		 */
		public function show( $data )
		{
			foreach($data as $key => $value)
			{
				$this->$key = $value;
			}
		
			include $this->path;
		}
	}

?>
