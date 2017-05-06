<?php

class Model_bobot extends CI_Model
{	
	function __construct()
	{
		parent::__construct();
		
	}

	function get_all_bobot(){
		$this->db->select('*');					
		return $this->db->get('tb_bobot');
	}

	

	
	

}

?>