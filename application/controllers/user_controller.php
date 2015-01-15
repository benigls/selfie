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
}?>