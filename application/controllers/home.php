<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//$this->load->model('home_model');
		//$this->load->library('access');
		//$this->load->library('session');
		//$this->load->helper('url');
		//$this->load->library('recaptcha');
		
	
	}
 	
	public function index() {
		
		
		$data['title'] = "Maybank2u.com";
		
 		//$this->load->view('layout/header', array('data' => $data));
		$this->load->view('home/index');
		//$this->load->view('layout/footer'); 
		
 	}
}