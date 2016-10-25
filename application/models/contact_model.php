<?php

class Contact_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	
	
	function create($data){

		$this->db->trans_start();
		$this->db->insert('contacts', $data);
		$id = $this->db->insert_id();
		
		$this->db->trans_complete();
		return $id;
	}

	
}