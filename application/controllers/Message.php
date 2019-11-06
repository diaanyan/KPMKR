<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	public function index()
	{
		$data = $this->Mymodel->getNews(); 
            $user = $this->Mymodel->getData(); 
            $gambar = $this->Mymodel->getImages();
            $this->load->view('first', array('data' => $data, 'gambar' => $gambar, 'user' => $user)); 
	}
	public function email(){
		$this->load->library('email');

		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'telephone' => $this->input->post('telephone'),
			'message' => $this->input->post('message'),
			); 
		$this -> Mymodel ->addMsg($data);
		$this -> index();
		
		 $config = array();
                $config['useragent']           = "CodeIgniter";
                $config['mailpath']            = "C:/xampp/sendmail"; // or "/usr/sbin/sendmail"
                $config['protocol']            = "smtp";
                $config['smtp_host']           = "localhost";
                $config['smtp_port']           = "465";
                $config['mailtype'] = 'html';
                $config['charset']  = 'utf-8';
                $config['newline']  = "\r\n";
                $config['wordwrap'] = TRUE;

                $this->load->library('email');

                $this->email->initialize($config);

                $this->email->from('kpmkr.surabaya@gmail.com', 'admin');
                $this->email->to('palupisekarh@gmail.com');
                //$this->email->cc('xxx@gmail.com'); 
                //$this->email->bcc($this->input->post('email')); 
                $this->email->subject('Registration Verification: Continuous Imapression');
                $msg = "Thanks for signing up!
            Your account has been created, 
            you can login with your credentials after you have activated your account by pressing the url below.
            Please click this link to activate your account:<a href=\"".base_url('user/verify')."/{$verification_code}\">Click Here</a>";

            $this->email->message($msg);   
            //$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));

            $this->email->send();
    }

	public function hapus($email){
      $where = array('idMsg' => $email);
      $this->m_data->hapus_data($where,'message');
      redirect('crud/message');
    }	

	
}