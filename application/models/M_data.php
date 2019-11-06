<?php

class M_data extends CI_Model{

  //read
	function tampil_data($number, $offset){
		return $query = $this->db->get('user',$number,$offset)->result();
	}

  function jumlah_data(){
    return $this->db->get('user')->num_rows();
  }

  //create
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

  //delete
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  //edit
  function edit_data($where, $table) {
    return $this->db->get_where($table,$where);
  }

  //update
  function update_data($where,$data,$table) {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  public function countRowUser(){
  $query = $this->db->query("SELECT *,count(*) AS jumlah FROM user");
  return $query->result();
  }

  public function countRowNews(){
  $query = $this->db->query("SELECT *,count(*) AS jumlah FROM news");
  return $query->result();
  }

  public function countRowGal(){
  $query = $this->db->query("SELECT *,count(*) AS jumlah FROM gallery");
  return $query->result();
  }

  public function countRowMsg(){
  $query = $this->db->query("SELECT *,count(*) AS jumlah FROM message");
  return $query->result();
  }

}

