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

	public function login(){
		$query = $this->db->get("user_tbl");

		foreach ($query->result() as $row) {
	    	if()
		}
	}
}
?>
