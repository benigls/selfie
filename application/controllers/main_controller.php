<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends CI_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}


	public function index(){
<<<<<<< HEAD
		$this->home();
=======
		$this->sudoAdmin();
>>>>>>> 91390776652fd7152d0f58d17d144353834a9203
	}

	public function home(){
		$data["content"] = "home";
		$this->load->view("main_view", $data);
	}

	public function login(){
		$data["content"] = "login";
		$this->load->view("main_view", $data);		
	}
	public function register(){
		$data["content"] = "register";
		$this->load->view("main_view", $data);
	}

	public function admin(){
		$data["content"] = "admin";
		$this->load->view("main_view", $data);

	}
	public function sudoadmin(){
		$data["content"] = "sudoadmin";
		$this->load->view("main_view", $data);
	}

	public function addevent_page(){
		$data["content"] = "addevent_page";
		$this->load->view("main_view", $data);
	}
	
}?>