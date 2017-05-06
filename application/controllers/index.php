<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
/*
* CONTROLLER INDEX WEBSITE
* This controler for screen index
*
* Log Activity : ~ Create your log if you change this controller ~
* 1. Create 12 Januari 2015 by Muhammad Arif W, Create controller
*/

class Index extends CI_Controller {

	function __construct(){
        parent::__construct();

		$this->lang->load('web', '');
		$this->load->model("model_user");	

		
    }
	
	// fungsi untuk mengecek apakah user sudah login
	public function index(){
		$this->load->view('index');

		// if(empty($_SESSION['spk_saw']) || empty($_SESSION['spk_saw']['id'])){
		// 	 $url= base_url().'index/signin/';
  //               redirect($url);
		// 	//redirect('index/signin/');
		// 	return;
		// }else{	
		// 		$url= base_url().'index/dashboard';
  //               redirect($url);			
		// 	//redirect('index/dashboard');						
		// 	return;
		// }
		
	}

	public function tabel(){
		$this->load->view('admin/tabel');
	}

	public function login(){
		$this->load->view('admin/login');
	}

	public function signin(){
		if(!$_POST){			
			$this->template->spk_saw_signin("login/bg_login");
        }else{
             $_SESSION['timestamp'] = time();
			$username      = mysql_real_escape_string($this->response->post('username'));			
            $password   = md5(mysql_real_escape_string($this->response->post('password')));

  		
            $Qspk_saw = $this->model_user->get_by_login($username,$password)->row();
            if(!empty($Qspk_saw)){
			
					$_SESSION['spk_saw']['id'] = $Qspk_saw->id;
					$_SESSION['spk_saw']['username'] = $Qspk_saw->username;																	
					echo json_encode(array('msg' => 'sukses'));
			}else{
				echo json_encode(array('msg' => 'gagal'));
			}   
        }
	}

	public function cekusername(){
		$username = $this->template->clearInput($this->input->post('username'));

		$data['user'] = $this->model_user->get_user_by_username($username);
		
		if($data['user']->num_rows() > 0){
			echo json_encode(array('msg' => 'sukses','username'=>$username));
		}else{
			echo json_encode(array('msg' => 'gagal'));
		}

		
	}

	public function dashboard(){
			 if(empty($_SESSION['spk_saw']) ){
            redirect('index/signin');
            return;
        }else{
            $this->template->spk_saw('index');
        }
	}

	public function logout(){
		unset($_SESSION['spk_saw']);
		/*unset($_SESSION['search']);
		unset($_SESSION['sort']);*/
		$url= base_url().'index/signin/';
                redirect($url);
	}



}

?>