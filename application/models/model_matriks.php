<?php

class Model_matriks extends CI_Model
{	
	function __construct()
	{
		parent::__construct();
		
	}

	function get_all_kriteria($limit=1000000,$offset=0){
		$this->db->select('ts.nis, ts.nama, tm.kelas, (Select max(kelas) as max_kelas from tb_matriks) as max_kelas, tm.pot,(Select max(pot) as max_pot from tb_matriks) as max_pot, tm.rns,(Select max(rns) as max_rns from tb_matriks) as max_rns, tm.jto, (Select max(jto) as max_jto from tb_matriks) as max_jto, tm.ne, (Select max(ne) as max_ne from tb_matriks) as max_ne, tm.prestasi ,(Select max(prestasi) as max_prestasi from tb_matriks) as max_prestasi');			
		if(isset($_SESSION['search']) && $_SESSION['search'] != "all-search"){
            $this->db->like("ts.nama",$_SESSION['search']);			
        }	
		$this->db->limit($limit,$offset);
		return $this->db->join('tb_siswa ts','ts.nis=tm.nis')->get('tb_matriks tm');
	}

	

	
	

}

?>