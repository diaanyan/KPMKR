<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		/*if($this->session->userdata('status') != "login"){
		redirect(base_url("login"));
		}*/
	}
	public function index()
	{
		$data = $this->Mymodel->getNews();
		$gambar = $this->Mymodel->getImages();
		$this->load->view('first', array('data' => $data, 'gambar' => $gambar));
	}
}
