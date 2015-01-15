<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends CI_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}


	public function index(){
		// $this->home();
		$this->load->view("twitter");
	}

	public function home(){
		$data["content"] = "home";
		$data["results"] = "";
		$data["id"] = "0";
		$this->load->view("main_view", $data);
	}

	public function login(){
		$data["content"] = "login";
		$data["results"] = "";
		$data["id"] = "0";
		$this->load->view("main_view", $data);		
	}
	public function register(){
		$data["content"] = "register";
		$data["results"] = "";
		$data["id"] = "0";
		$this->load->view("main_view", $data);
	}

	public function addevent($id){
		$data["content"] = "addevent_page";
		$data["results"] = "";
		$data["id"] = $id;
		$this->load->view("main_view", $data);
	}

	public function sudoadmin(){
		$data["content"] = "sudoadmin";
		$data["results"] = "";
		$data["id"] = "0";
		$this->load->view("main_view", $data);
	}
}
?>