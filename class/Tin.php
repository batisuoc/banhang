<?php

require_once 'Database.php';

class Tin extends Database
{}
	// function __construct()
	// {
	// 	# code...
	// }
	function Blog($num_of_tin)
	{
		$sql = "SELECT idTin, TieuDe, TomTat,urlHinh 
				FROM tin  
				WHERE AnHien = 1 
   				ORDER BY RAND() LIMIT 0,$sotin"
   		$result = $this->db->query($sql);
	}
}

?>