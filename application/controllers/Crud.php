<?php

class Crud extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_data');
    $this->load->helper(array('form', 'url'));

  }

  	public function users()
	{
		$this->load->view('users');
	}

	public function gallery(){
		$this->load->view('gallery');
	}

	public function news(){
		$this->load->view('news');
	}

  public function message(){
    $data= $this->Mymodel->getMsg();
    $this->load->view('message',array('data'=>$data));
  }

  function index(){
    $jumlah_data = $this->m_data->jumlah_data();
    $config['base_url'] = base_url().'index.php/crud/index/';
    
    $this->load->library('pagination');
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = 20;
    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);   
    $data['users'] = $this->m_data->tampil_data($config['per_page'],$from);
    $this->load->view('users',$data);
  }

  //Pindah form insert
  function tambah(){
    $this->load->view('v_input');
  }

  //INSERT
  function tambah_aksi(){

    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    $asal =  $this->input->post('asal');
    $tempatLahir =  $this->input->post('tempatLahir');
    $tglLahir =  $this->input->post('tglLahir');
    $alamatAsal =  $this->input->post('alamatAsal');
    $kampus =  $this->input->post('kampus');
    $alamatSby =  $this->input->post('alamatSby');
    $jurusan =  $this->input->post('jurusan');
    $noHP =  $this->input->post('noHP');
    $email =  $this->input->post('email');
    $idLine =  $this->input->post('idLine');
    $ktm =  $this->input->post('ktm');
    $ktp =  $this->input->post('ktp');
    $authentication= $this->input->post('authentication');

      $data = array(
        'username' => $username,
        'password' => $password,
        'nama' => $nama,
        'asal' => $asal,
        'tempatLahir' => $tempatLahir,
        'tglLahir' => $tglLahir,
        'alamatAsal' => $alamatAsal,
        'kampus' => $kampus,
        'alamatSby' => $alamatSby,
        'jurusan' => $jurusan,
        'noHP' => $noHP ,
        'email' => $email,
        'idLine' => $idLine,
        'ktm' => $ktm,
        'ktp' => $ktp,
        'authentication' => $authentication
      );

      $this->load->view('users', $data);
      
    }

  

  function edit($no) {
    $where = array('no' => $no);
    $data['users'] = $this->m_data->edit_data($where,'user')->result();
    $this->load->view('v_edit',$data);
  }

  //EDIT/Update data
  function update() {

    $username = $this->input->post('username');
    $authentication = $this->input->post('authentication');
    $password = $this->input->post('password');
      $data = array(
      'authentication' => $authentication,
      'password' => $password,
      'username' => $username,
      );

      $where = array(
      'username' => $username
      );

      $this->m_data->update_data($where,$data,'user');
      redirect('crud/index');
    }

    function hapus($no){
      $where = array('no' => $no);
      $this->m_data->hapus_data($where,'user');
      redirect('crud/index');
    }

    public function countTotalrow(){
      $data['query'] = $this->m_data->countRow();
  }
}
?>
