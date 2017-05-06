<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
/*
* CONTROLLER INDEX WEBSITE
* This controler for screen index
*
* Log Activity : ~ Create your log if you change this controller ~
* 1. Create 12 Januari 2015 by Muhammad Arif W, Create controller
*/

class Bobot extends CI_Controller {
	var $data = array('scjav'=>'assets/jController/CtrlBobot.js');
  var $limit = 10;
  var $offset = 0;

	function __construct(){
        parent::__construct();
         if(empty($_SESSION['spk_saw']) || empty($_SESSION['spk_saw']['id'])){
      redirect('index/signin/');
      return;
    }

		 	$this->lang->load('web', '');
      $this->load->model("enduser/model_siswa");      
      $this->load->model("enduser/model_matriks");      
			$this->load->model("enduser/model_bobot");      
    }

     public function index(){
      unset($_SESSION['search']);  
     		$this->data['bobot'] = $this->model_bobot->get_all_bobot();
        $this->template->spk_saw('ms_bobot/bg_bobot',$this->data);    
    }

    public function simpan(){
      $id_bobot   = $this->input->post('id_bobot');
      $bobot_kelas   = $this->input->post('bobot_kelas');
      $bobot_pot   = $this->input->post('bobot_pot');
      $bobot_rns   = $this->input->post('bobot_rns');
      $bobot_jto   = $this->input->post('bobot_jto');
      $bobot_ne   = $this->input->post('bobot_ne');
      $bobot_prestasi   = $this->input->post('bobot_prestasi');
      $jml_bobot = $bobot_kelas + $bobot_pot + $bobot_rns + $bobot_jto + $bobot_ne + $bobot_prestasi;
      if($jml_bobot >10){
        echo json_encode(array("msg"=>"gagal"));
        return;
      }

      $data_edit  = array(
                      'b_kelas'                 => $bobot_kelas,
                      'b_pot'                   => $bobot_pot,
                      'b_rns'                   => $bobot_rns,
                      'b_jto'                   => $bobot_jto,
                      'b_ne'                    => $bobot_ne,
                      'b_prestasi'              => $bobot_prestasi,                      
                    );
      if($id_bobot == "baru"){
         $this->db->insert('tb_bobot',$data_edit);
         echo json_encode(array("msg"=>"sukses"));
      }else{
        $this->db->where('id',$id_bobot)->update('tb_bobot',$data_edit);
        echo json_encode(array("msg"=>"sukses"));
      }

      
    }
    

     

 


 }