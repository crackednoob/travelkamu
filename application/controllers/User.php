<?php 
class User extends CI_Controller{
	/*public function __construct(){
		$this->load->model('main_model');
	}*/

	public function index(){
		$this->load->view('user_form_v');
		//$this->main_model('tambah')	;
	}
	
	public function add(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$data = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
		);
		$this->load->model('main_model');
		$this->main_model->tambah($data);
		$this->load->view('user');
	   }
	}
?>