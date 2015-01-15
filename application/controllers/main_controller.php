<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends CI_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}


	public function index(){
		$this->home();
	}

	public function home(){
		$data["content"] = "home";
		$data["results"] = "";
		$this->load->view("main_view", $data);
	}

	public function login(){
		$data["content"] = "login";
		$data["results"] = "";
		$this->load->view("main_view", $data);		
	}
	public function register(){
		$data["content"] = "register";
		$data["results"] = "";
		$this->load->view("main_view", $data);
	}

	public function sudoadmin(){
		$data["content"] = "sudoadmin";
		$data["results"] = "";
		$this->load->view("main_view", $data);
	}

	public function addevent_page(){
		$data["content"] = "addevent_page";
		$data["results"] = "";
		$this->load->view("main_view", $data);
	}
	
}?>