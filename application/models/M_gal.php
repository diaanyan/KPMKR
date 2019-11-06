<?php
class M_gal extends CI_Model {

  /*function getData() {
      $query = $this->db->get('gallery');
      return $query->result_array();
  }*/

  function getData($number, $offset){
    return $query = $this->db->get('gallery',$number,$offset)->result_array();
  }

   function jumlah_data(){
    return $this->db->get('gallery')->num_rows();
  }

  function addData($data) {
      $this->db->insert('gallery', $data);
  }

  
  function delete($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
}
?>