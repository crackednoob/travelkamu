<?php
/**
* 
*/
class Main_model extends CI_Model
{
	function tambah($data){
		
		$this->db->insert('user',$data);
	}
	
	function gets(){
		return $this->db->get('User')->result();
	}
	function get($id){}
	function add(){}
	function del($id){
		$this->db->delete('user', ["id=>$id"]);
	}
	function edit($id){}
	function detail($id){}
}	
	
?>