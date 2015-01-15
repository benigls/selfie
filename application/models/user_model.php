<?php  
class User_model extends Dataaccess_user{
	public function insert_user(){
		$dataUser = array(
			"email" =>  $this->input->post("email"),
			"firstName" =>  $this->input->post("firstname"),
			"lastName" => $this->input->post("lastname"),
			"middleName" =>  $this->input->post("middlename"),
			"address" =>  $this->input->post("address"),
			"dateOfTerm" => $this->input->post("dateofterm"),
		);
	}
}
?>
