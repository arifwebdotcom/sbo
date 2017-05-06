<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
/*
* CONTROLLER INDEX WEBSITE
* This controler for screen index
*
* Log Activity : ~ Create your log if you change this controller ~
* 1. Create 12 Januari 2015 by Muhammad Arif W, Create controller
*/

class Siswa extends CI_Controller {
	var $data = array('scjav'=>'assets/jController/CtrlSiswa.js');
  var $limit = 10;
  var $offset = 0;

	function __construct(){
        parent::__construct();
         if(empty($_SESSION['spk_saw']) || empty($_SESSION['spk_saw']['id'])){
      redirect('index/signin/');
      return;
    }

		 	$this->lang->load('web', '');
      $this->load->model("model_siswa");      
			$this->load->model("model_matriks");      
    }

     public function index(){
      unset($_SESSION['search']);
       $page=$this->uri->segment(3);
        $uri=3;
        $limit=$this->limit;
        if(!$page):
        $offset = $this->offset;
            else:
            $offset = $page;
        endif;
        $pg=$this->model_siswa->get_all_siswa();
        $url='siswa/index';
     		$this->data['siswa'] = $this->model_siswa->get_all_siswa($limit,$offset);
        $this->data['pagination'] = $this->template->paging2($pg,$uri,$url,$limit);
         if ($this->input->post('ajax')) {
            $this->load->view('enduser/ms_siswa/bg_ms_siswa_ajax', $this->data);
        } else {
       		$this->template->spk_saw('ms_siswa/bg_ms_siswa',$this->data);
     }
   }

  public function search(){
    if(isset($_POST['search'])  ){
      $search = $this->db->escape_str($this->input->post('search'));
      
      if(empty($search)){$search ='all-search';$_SESSION['search']='all-search';}
      $_SESSION['search'] = $search;
    } 
    if(isset($_SESSION['search'])){     
     $page=$this->uri->segment(3);
        $uri=3;
        $limit=$this->limit;
        if(!$page):
        $offset = $this->offset;
            else:
            $offset = $page;
        endif;
        $pg=$this->model_siswa->get_all_siswa();
        $url='siswa/index';
        $this->data['siswa'] = $this->model_siswa->get_all_siswa($limit,$offset);
        $this->data['pagination'] = $this->template->paging2($pg,$uri,$url,$limit);         
            $this->load->view('enduser/ms_siswa/bg_ms_siswa_ajax', $this->data);       

    }
  }


  public function add(){             
      if ($_POST) {
        $nama = $this->template->clearInput($this->input->post('nama'));
        $kode = $this->template->clearInput($this->input->post('kode'));  
        $type = $this->template->clearInput($this->input->post('type'));        
                
          $data_add = array(
              'name'        => $nama,
              'value'       => $kode,              
              'type'        => $type,              
              'create_user' => $this->session->userdata('nama'),
              'create_date' => date("Y-m-d H:i:s"),            
          );
          $insert_user = $this->db->insert('m_produk',$data_add);
          if($insert_user){                          
              redirect("ms_produk/index");            
          }
        
      }else{
            $data['class']= 'ms_produk';     
            $data['view'] = 'produk_add';
            $this->load->view("template",$data);
      }
     }

     public function edit(){
       if ($_POST) {
        $id_produk = $this->template->clearInput($this->input->post('irdpo'));
        $nama = $this->template->clearInput($this->input->post('nama'));
        $kode = $this->template->clearInput($this->input->post('kode'));                        
        $type = $this->template->clearInput($this->input->post('type'));                           
          $data_add = array(
              'name'        => $nama,
              'value'        => $kode,                                
              'type'        => $type,                                   
          );
          $insert_user = $this->db->where('id',$id_produk)->update('m_produk',$data_add);

          if($insert_user){            
              //echo "1";
              redirect("ms_produk/index");            
          }
        
      }else{
        $id = $this->uri->segment(3);
        $data['produk'] = $this->M_produk->get_produk_by_id($id)->row();
        //$this->template->arenatiket('ms_produk/bg_produk_edit',$this->data);
        $data['class']= 'ms_produk';     
        $data['view'] = 'produk_edit';
        $this->load->view("template",$data);
      }
    }
    
  public function delete(){
    if($_POST != null){
      $delete = $this->input->post('id');
            
        $del =$this->db->where_in('id',$delete)->delete('m_produk');
        if($del){
            echo json_encode(array("msg"=>'sukses'));
        }else{
            echo json_encode(array("msg"=>'gagal'));
        }
    }
  }


 }