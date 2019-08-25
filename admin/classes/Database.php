<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "canada16", "store_db");
		return $this->con;
	}
}

?>