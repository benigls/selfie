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
		$this->load->view("main_view", $data);
	}

}?>