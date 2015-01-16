<?php  

class Pendinguser_Model extends MY_Model{
	public function insert_pendinguser(){
		$dataUser = array(
			"firstName" =>  $this->input->post("firstname"),
			"middleName" =>  $this->input->post("middlename"),
			"lastName" => $this->input->post("lastname"),
			"password" => $this->input->post("password"),
			"email" =>  $this->input->post("email"),
			"address" =>  $this->input->post("address"),
			"dateOfTerm" => $this->input->post("dateofterm"),
		);

		$this->insert("pending_user_tbl", $data);
	}
}
?>
