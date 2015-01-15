<?php  
class User_model extends MY_Model{
	public function login_user(){
		$dataUser = array(
			"first_name" =>  $this->input->post("firstname"),
			"middle_name" =>  $this->input->post("middlename"),
			"last_name" => $this->input->post("lastname"),
			"password" =>  $this->input->post("password"),
			"email" =>  $this->input->post("email"),
			"address" =>  $this->input->post("address"),
			// "	date_registered	" =>  $this->input->post("dateregi"),
			"date_of_term" => $this->input->post("dateofterm"),
		);

		$this->login($data);
	}

	public function insert_user(){
		$dataUser = array(
			"first_name" =>  $this->input->post("firstname"),
			"middle_name" =>  $this->input->post("middlename"),
			"last_name" => $this->input->post("lastname"),
			"password" =>  $this->input->post("password"),
			"email" =>  $this->input->post("email"),
			"address" =>  $this->input->post("address"),
			// "	date_registered	" =>  $this->input->post("dateregi"),
			"date_of_term" => $this->input->post("dateofterm"),
		);

		$this->insert("user_tbl", $dataUser);
	}
}
?>
