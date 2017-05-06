<?php

class Model_siswa extends CI_Model
{	
	function __construct()
	{
		parent::__construct();
		
	}

	function get_all_siswa($limit=1000000,$offset=0){
		$this->db->select('*');			
		if(isset($_SESSION['search']) && $_SESSION['search'] != "all-search"){
            $this->db->like("nama",$_SESSION['search']);			
        }	
		$this->db->limit($limit,$offset);
		return $this->db->get('tb_siswa');
	}

	function get_siswa_by_id($id){
		$this->db->select("*");
		$this->db->where("nis",$id);
		return $this->db->get("tb_siswa");
	}


	
	

}

?>