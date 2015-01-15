<?php  

class User_model extends MY_Model{
	public function login_user(){
		$user_name =  $this->input->post("username");
		$password =  $this->input->post("password");

		$typeofuser = $this->login($user_name, $password);
		if($typeofuser == "admin"){
			$data["results"] = $this->view_pendinguser();
			$data["content"] = "admin";
			$this->load->view("main_view", $data);
		}
		else if($typeofuser == "user"){

		}
	}

	public function insert_user(){
		$dataUser = array(
			"user_name" =>  $this->input->post("username"),
			"first_name" =>  $this->input->post("firstname"),
			"middle_name" =>  $this->input->post("middlename"),
			"last_name" => $this->input->post("lastname"),
			"password" =>  $this->input->post("password"),
			"email" =>  $this->input->post("email"),
			"address" =>  $this->input->post("address"),
			// "	date_registered	" =>  $this->input->post("dateregi"),
			"date_of_term" => $this->input->post("dateofterm")
		);

		$this->insert("user_tbl", $dataUser);
	}

	public function view_pendinguser(){
		return $this->view_all("pending_user_tbl");
	}

	public function accept_user($id){
		$this->getbyid($id);
		$data["results"] = $this->view_pendinguser();
		$data["content"] = "admin";
		$this->load->view("main_view", $data);
	}

	public function reject_user($id){
		$this->delete("pending_user_tbl", $id);
		$data["results"] = $this->view_pendinguser();
		$data["content"] = "admin";
		$this->load->view("main_view", $data);
	}
}
?>
