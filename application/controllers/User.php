<?php 
class User extends CI_Controller{
	/*public function __construct(){
		$this->load->model('main_model');
	}*/

	public function index(){
		// $this->load->model('main_model');

		// $v_data['tbuser'] = $this->main_model->gets();

		$this->load->view('user_form_v');
	}

	public function view_data(){
		$this->load->model('main_model');

		$v_data['tbuser'] = $this->main_model->gets();

		$this->load->view('user_data', $v_data);
	}
	
	public function add(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
		);
		$this->load->model('main_model');
		$this->main_model->tambah($data);
		$this->load->view('user_form_v');
	   }
	}

	function del($id){
		$this->load->model('main_model');

		$this->main_model->del($id);

	}
	function edit($id){}
	function detail($id){}
?>