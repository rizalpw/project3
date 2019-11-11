<?php 

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login2"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$this->load->view('v_dosen');
	}
}