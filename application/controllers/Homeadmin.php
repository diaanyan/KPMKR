<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeadmin extends CI_Controller {

	public function index()
	{
		$this->load->model("m_data");

		$this->load->view('indexadmin', array("user" => $this->m_data->countRowUser(),
			"news" => $this->m_data->countRowNews(),
			"gal" => $this->m_data->countRowGal(),
			"msg" => $this->m_data->countRowMsg()));
		$this->load->library('session');
	}

}