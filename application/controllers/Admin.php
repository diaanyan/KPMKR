<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("logadmin"));
		}
	}
 
	function index(){
		$this->load->view('indexadmin', array("user" => $this->m_data->countRowUser(),
			"news" => $this->m_data->countRowNews(),
			"gal" => $this->m_data->countRowGal(),
			"msg" => $this->m_data->countRowMsg()));
		$this->load->library('session');
	}

}