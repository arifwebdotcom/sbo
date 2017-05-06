<?php

class Model_user extends CI_Model
{	
	function __construct()
	{
		parent::__construct();
				
	}
	
	 public function get_all_user ($limit=1000000,$offset=0){
		$this->db->limit($limit,$offset);
		$this->db->order_by('username','asc');
		return $this->db->get('tb_user');
	  }

	function get_user($limit=1000000,$offset=0){
		$this->db->limit($limit,$offset);
		
		 return $this->db->get('tb_user');
	}
	
	function edit($id){
        $this->db->where("id",$id);
		return $this->db->get('tb_user')->result();
    }
	
	public function search($search,$limit=1000000,$offset=0){
        if($search != "all-search"){
            $this->db->like("username",$search);
        }
		$this->db->limit($limit,$offset);
        $this->db->order_by("username","asc");
		return $this->db->get('tb_user');
    }

    function get_by_login($username,$password){
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);				
		return $this->db->get('tb_user');
	}

}