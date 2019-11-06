
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updateprof extends CI_Controller {
    public function index()
    {
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
        $this->load->view('editprof');
    }
   public function update(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $asal = $_POST['asal'];
        $tempatLahir = $_POST['tempatLahir'];
        $tglLahir = $_POST['tglLahir'];
        $alamatAsal = $_POST['alamatAsal'];
        $kampus = $_POST['kampus'];
        $alamatSby = $_POST['alamatSby'];
        $jurusan = $_POST['jurusan'];
        $noHP = $_POST['noHP'];
        $email = $_POST['email'];
        $idLine = $_POST['idLine'];
        $data_update = array(
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
            'noHP' => $noHP,
            'email' => $email,
            'idLine' => $idLine,
            );
        $where = array('username' => $username);
        $hasil = $this ->Mymodel->UpdateUser('user', $data_update, $where);
        if($hasil>=1){
            redirect('login/home');
        }else{
            echo "<h3>Update Gagal</h3>";
        }
    }

    public function update_data($username){
        $hasil = $this->Mymodel->getData("where username = '$username'");
        $data_edit = array(
            'username' => $hasil[0]['username'],
            'password' => $hasil[0]['password'],
            'nama' => $hasil[0]['nama'],
            'asal' => $hasil[0]['asal'],
            'tempatLahir' => $hasil[0]['tempatLahir'],
            'tglLahir' => $hasil[0]['tglLahir'],
            'alamatAsal' => $hasil[0]['alamatAsal'],
            'kampus' => $hasil[0]['kampus'],
            'alamatSby' => $hasil[0]['alamatSby'],
            'jurusan' => $hasil[0]['jurusan'],
            'noHP' => $hasil[0]['noHP'],
            'email' => $hasil[0]['email'],
            'idLine' => $hasil[0]['idLine']
            );

        $this->load->view('editprof', $data_edit);

    }
}