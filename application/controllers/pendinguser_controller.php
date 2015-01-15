<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendinguser_Controller extends CI_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}

	public function register(){
		$this->load->model("pendinguser_model");

		if($this->input->post("register")){
			if($this->input->post("confirmpassword") == $this->input->post("password"))
				$this->pendinguser_model->insert_pendinguser();
		}

		$this->home();
	}

	public function home(){
		$data["content"] = "home";
		$data["results"] = "";
		$data["id"] = "0";
		$this->load->view("main_view", $data);
	}
}?>