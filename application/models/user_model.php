<?php  
class User_model extends Dataaccess_user{
	public function insert_user(){
		$dataUser = array(
			"userId" =>  $this->input->post("name"),
			"email" =>  $this->input->post("desc"),
			"firstName" =>  $this->input->post("rate"),
			"lastName" => $this->input->post("releasedate"),
			"middleName" =>  $this->input->post("name"),
			"address" =>  $this->input->post("desc"),
			"dateOfTerm" => $this->input->post("releasedate"),
			"dateRegistered" =>  $this->input->post("rate")
		);
	}
}
?>
