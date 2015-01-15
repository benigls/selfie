<?php  

class Pendinguser_Model extends MY_Model{
	public function insert_pendinguser(){
		$dataUser = array(
			"pending_user_name" =>  $this->input->post("username"),
			"pending_first_name" =>  $this->input->post("firstname"),
			"pending_middle_name" =>  $this->input->post("middlename"),
			"pending_last_name" => $this->input->post("lastname"),
			"pending_password" => $this->input->post("password"),
			"pending_email" =>  $this->input->post("email"),
			"pending_address" =>  $this->input->post("address"),
			"pending_date_of_term" => $this->input->post("dateofterm"),
			"pending_user_name" => $this->input->post("username")
		);

		$this->insert("pending_user_tbl", $dataUser);
		// $this->delete("pending_user_tbl")
	}
}
?>
