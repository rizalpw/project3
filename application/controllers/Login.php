<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		
		$qry = $this->m_login->cek_login("login",$where);

		$cek = $qry->num_rows();

		// echo $cek;
		// echo "<br>";
		// echo $qry->row('level');
		if($cek > 0 && $qry->row('level') == 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			
				redirect(base_url("admin"));
	

		}elseif($cek > 0 && $qry->row('level') == 1){
			$data_session = array(
				'nama' => $username,
				'status' => "login2"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("dosen"));
		}
		else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}