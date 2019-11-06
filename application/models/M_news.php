<?php
class M_news extends CI_Model {

  /*function getData() {
    $query = $this->db->get('news');
    return $query->result_array();
  }*/

  function getData($number, $offset){
    return $query = $this->db->get('news',$number,$offset)->result_array();
  }

   function jumlah_data(){
    return $this->db->get('news')->num_rows();
  }

  function addData($data) {
      $this->db->insert('news', $data);
  }

  
  function delete($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

 function edit_data($where, $table) {
    return $this->db->get_where($table,$where);
  }

  //update
  function update_data($where,$data,$table) {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

}
?>