<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mymodel');
		$this->load->helper('url');
		//$this->load->library('session');
		

	}
	public function index()
	{
		$data['err_message']="";
		$this->load->view('login', $data);
	}
	public function loginuser(){
		$username =  $this->input->post('username'); 
		$password = $this->input->post('pass'); 
		/*$where = array(
			'username' => $username,
			'pass' => md5($password)
			);*/
		$isLogin = $this->Mymodel->login_authen($username, $password);  
		$i = $this->Mymodel->authen_user($username);

		if ($isLogin == true) { 
			if($i[0]['authentication'] == 3){
				$this->load->view('error');
			}else{
			$data_session = array('username' => $username,
				'status' => "login");

			$this->session->set_userdata($data_session);
			redirect('login/home');
			}
		} else {
		  if ($i[0]['authentication'] < 3) {   
		  		$update = $this->Mymodel->wrong_password($username, $i[0]['authentication']+1); 
		  		$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);  
		  		
		  		$this->load->view('login', $data);  
		  	}  else {   
		  		$data['err_message'] = "AKUN ANDA TERBLOCK <br> Harap hubungi : kpmkr.surabaya@gmail.com";   

		  		$this->load->view('login', $data);  
		  	} 
		 } 
	}
		public function home(){
			if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
			}
			$data = $this->Mymodel->getNews(); 
			$user = $this->Mymodel->getData(); 
			$gambar = $this->Mymodel->getImages();
			$this->load->view('home', array('data' => $data, 'gambar' => $gambar, 'user' => $user)); 
		}
		public function logout()
		{
			/*$array_items = array('username', 'nama', 'asal');
			$this->session->unset_userdata($array_items);
			//$this->session->unset_userdata(array('username' => ''));*/
			$this->session->sess_destroy();
			redirect(base_url('index.php/welcome'));
		}
}
