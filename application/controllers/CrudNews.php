<?php
class CrudNews extends CI_Controller {
  
  public function __construct() {
  parent::__construct();
  $this->load->model('m_news');
  $this->load->helper(array('form', 'url'));

  }

function index(){
  $this->load->view('news');
}

public function create(){
                $config['upload_path']          = 'assets/images/news/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->load->helper('form');
                $fileUpload = array();

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //print_r($error);
                        //$this->load->view('upload_form', $error);
                        echo "<h2>Maaf, gambar gagal diupload, tidak sesuai format</h2>";
                }
                else
                {
                        $fileUpload = $this->upload->data();
                        $data = array(
                            'judul' => $this->input->post('judul'),
                            'image' => $fileUpload['file_name'],
                            'isiberita' => $this->input->post('isiberita'),
                            'tanggal' => $this->input->post('tanggal'),
                            'bulan' => $this->input->post('bulan'),
                            'tahun' => $this->input->post('tahun')
                        );

                        $this->m_news->addData($data);
                        $data = array('upload_data' => $this->upload->data());
                        redirect('crudNews/index');
                }

  }
  

  function readData() {
        $this->load->database();
        $jumlah_data = $this->m_news->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'crudNews/readData';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 2;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);   
        $data['news'] = $this->m_news->getData($config['per_page'],$from);


        //$data = $this->m_gal->getData();
        $this->load->view('v_news', array('data' => $data));
    }


  /*function readData() {
        $data = $this->m_news->getData();
        $this->load->view('v_news', array('data' => $data));
  }*/

    function hapus($idNews){
      $where = array('idNews' => $idNews);
      $this->m_news->delete($where,'news');
      redirect('CrudNews/readData');
    }

function edit($idNews) {
    $where = array('idNews' => $idNews);
    $data['news'] = $this->m_news->edit_data($where,'news')->result();
    $this->load->view('v_editnews',$data);
  }

function update() {

    $idNews = $this->input->post('idNews');
    $judul = $this->input->post('judul');
    $isiberita = $this->input->post('isiberita');
    $tanggal = $this->input->post('tanggal');
    $bulan = $this->input->post('bulan');
    $tahun= $this->input->post('tahun');

      $data = array(
      'idNews' => $idNews,
      'tanggal'=> $tanggal,
      'bulan' => $bulan,
      'tahun' => $tahun,
      'judul' => $judul,
      'isiberita' => $isiberita
      );

      $where = array(
      'idNews' => $idNews
      );

      $this->m_news->update_data($where,$data,'news');
      redirect('CrudNews/readData');
    }

}

