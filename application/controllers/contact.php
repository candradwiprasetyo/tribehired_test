<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('contact_model');
		$this->load->library('session');
		$this->load->library('access');
		
		
	}
 	
	public function index() {
		
			 // simpan di table
		$data['contact_name']	 		= $this->input->post('name');
		$data['contact_email'] 			= $this->input->post('email');
		$data['contact_message'] 		= $this->input->post('message');
		
		$data['contact_date'] 			= date("Y-m-d H:i:s");
		$data['contact_status'] 		= 1;
			
		$this->contact_model->create($data);
		
		//redirect('#contact');
	
 	}
	
	
	
}