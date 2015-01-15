<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_Controller extends CI_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}

	public function register(){
		$this->load->model("pendinguser_model");

		if($this->input->post("register")){
			$this->pendinguser_model->insert_pendinguser();
			// $this->view_movie();
		}
	}

}?>