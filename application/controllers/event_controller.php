<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_Controller extends CI_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}

	public function add_event($id){
		$this->load->model("event_model");
		$this->event_model->addevent($id);
	}

}?>