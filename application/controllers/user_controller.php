<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Controller extends CI_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}

	public function login(){
		$this->load->model("user_model");

		if($this->input->post("my_login")){
			$this->user_model->login_user();
			// $this->view_movie();
		}
	}

	public function acceptid($id){
		$this->load->model("user_model");
		$this->user_model->accept_user($id);
	}

	public function rejectid($id){
		$this->load->model("user_model");
		$this->user_model->reject_user($id);
	}
}?>