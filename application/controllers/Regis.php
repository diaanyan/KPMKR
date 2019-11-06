<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
         $this->load->model('Mymodel');
         $this->load->library('email');

    }
	public function index()
	{
	
		$this->load->view('registration');
	}
	public function create(){
		
		$data = array(
			'nama' => $this->input->post('nama'),
			'namap' => $this->input->post('namap'),
			'tempatLahir' => $this->input->post('tempatLahir'),
			'tglLahir' => $this->input->post('tglLahir'),
			'asal' => $this->input->post('asal'),
			'alamatAsal' => $this->input->post('alamatAsal'),
			'kampus' => $this->input->post('kampus'),
			'alamatSby' => $this->input->post('alamatSby'),
			'jurusan' => $this->input->post('jurusan'),
			'noHP' => $this->input->post('noHP'),
			'email' => $this->input->post('email'),
			'idLine' => $this->input->post('idLine'),
			);

			$this ->Mymodel->addData($data);
			redirect('regis/home');
		
 	}
 	public function home(){
			$data = $this->Mymodel->getNews(); 
			$user = $this->Mymodel->getData(); 
			$gambar = $this->Mymodel->getImages();
			$this->load->view('first', array('data' => $data, 'gambar' => $gambar, 'user' => $user)); 
		}
	 	public function update($username){
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	  
            $data = array(
				'nama' => $this->input->post('nama'),
				'namap' => $this->input->post('namap'),
				'tempatLahir' => $this->input->post('tempatLahir'),
				'tglLahir' => $this->input->post('tglLahir'),
				'asal' => $this->input->post('asal'),
				'alamatAsal' => $this->input->post('alamatAsal'),
				'kampus' => $this->input->post('kampus'),
				'alamatSby' => $this->input->post('alamatSby'),
				'jurusan' => $this->input->post('jurusan'),
				'noHP' => $this->input->post('noHP'),
				'email' => $this->input->post('email'),
				'idLine' => $this->input->post('idLine'),
	         );
            $this->Mymodel->UpdateUser($username, $data);
            redirect('home');
	        
	  }

}
