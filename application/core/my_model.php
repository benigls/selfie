<?php  
class MY_Model extends CI_Model{
	public function view_all($tblName){
		$query = $this->db->get($tblName);
		return $query->result();
	}

	public function insert($tblName, $data){
		$this->db->insert($tblName, $data); 
	}

	public function update($tablepk, $tblName,  $data){
		$this->db->where("id", $tablepk);
		$this->db->update($tblName, $data);
	}

	public function delete($tblName, $tablepk){
		$this->db->delete($tblName, array("id" => $tablepk)); 
	}

	public function login($username, $password){
		if($username == "admin" && $password == "admin"){
			return "admin";
		}
		else{
			$query = $this->db->get("user_tbl");
			foreach ($query->result() as $row) {
				if($row->username == $username && $row->password == $passwor){
					return "user";
				}
			}	
		}
		return 0;
	}

	public function getbyid($id){
		$query = $this->db->get_where("pending_user_tbl", array('id' => $id));
		foreach ($query->result() as $row) {
			$data = array(
			  	"user_name" => $row->pending_user_name,
			  	"first_name" => $row->pending_first_name,
			 	"middle_name" => $row->pending_middle_name,
			 	"last_name" => $row->pending_last_name,
			 	"password" => $row->pending_password,
			 	"email" => $row->pending_email,
			 	"address" => $row->pending_address,
			 	"date_registered" => date("Y-m-d"),
			 	"date_of_term" => $row->pending_date_of_term
			 );

	    	$this->db->insert("user_tbl", $data);
		}
	    $this->delete("pending_user_tbl", $id);
	}
}
?>
