<?php
class CrudGal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_gal');
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('gallery');
    }

    public function create(){
        $config['upload_path']          = 'assets/images/portfolio/thumbnails/';
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
                'nama' => $this->input->post('nama'),
                'image' => $fileUpload['file_name'],

            );

            $this->m_gal->addData($data);
            $data = array('upload_data' => $this->upload->data());
            redirect('crudGal/index');
            //$this->load->view('upload_success', $data);
        }

    }


    function readData() {
        $this->load->database();
        $jumlah_data = $this->m_gal->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'crudGal/readData';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);   
        $data['gallery'] = $this->m_gal->getData($config['per_page'],$from);


        //$data = $this->m_gal->getData();
        $this->load->view('v_gal', array('data' => $data));
    }

    function hapus($idGal){
        $where = array('idGal' => $idGal);
        $this->m_gal->delete($where,'gallery');
        redirect('crudGal/readData');
    }
}

?>