<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Mymodel');
		$this->load->helper('url');
	}
	public function read(){
		$data = $this->Mymodel->getImages(); 
		$this->load->view('first', array('data' => $data)); 
	}


}
