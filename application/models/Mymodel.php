<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {  
	 public function __construct(){//otomatis berjalan ketika model dibuat
   		 $this->load->database();
 	 }
	public function getData($where="") {
 		$query = $this->db->query('select * from user '.$where);  
 		return $query->result_array();  
 	 } 	/* public function getNews() {
 		$query = $this->db->get('news');  
 		return $query->result_array();  
 	 }*/  
 	 public function getNews() {
 		$query = $this->db->get('news');  
 		return $query->result_array();  
   	}
   	
   	 public function getImages() {
 		$query = $this->db->get('gallery');  
 		return $query->result_array();  
   	}

	public function addData($data) { 
		 $this->db->insert('user', $data);
	} 
	public function addMsg($data) { 
		 $this->db->insert('message', $data);
 	 }  

 	  public function getMsg(){ //read database
	    $query = $this->db->get('message'); //mengambil data dari table
	    return $query->result(); //data disimpan dalam array
  	}

  	public function countRow(){
	  $query = $this->db->query("SELECT *,count(*) AS jumlah FROM message");
	  return $query->result();
	}

 	 public function get_user($username){ 
	    $this->db->where('username', $username);
	    $query = $this->db->get('user'); 
	    return $query->row_array(); 
	  }
	public function UpdateUser($tabelName, $data, $where){
		$hasil = $this->db->update($tabelName, $data, $where);
		return $hasil;
	}
 	public function login_authen($username, $password){
 		$this->db->select('*'); 
 		$this->db->where('username', $username); 
 		$this->db->where('password', $password); 
 		$this->db->from('user');  

		$query = $this->db->get();  
		if ($query->num_rows() == 1) {  
			return true; 
		} else {  
			return false; 
		}
 	}

 	public function authen_user($username){
 		$this->db->select('authentication');  
 		$this->db->where('username', $username);  
 		$this->db->from('user');  

 		$query = $this->db->get();  
 		return $query->result_array(); 
 	}

 	public function wrong_password($username, $value){
 		$this->db->set('authentication', $value);  
 		$this->db->where("username", $username); 

 		$this->db->update('user'); 
 	}
}

?>