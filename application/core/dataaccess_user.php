<?php  
class Dataaccess_user extends CI_Model{
	public function view_all(){
		$query = $this->db->get("user_tbl");
		return $query->result();
	}

	public function insert($data){
		$this->db->insert("user_tbl", $data); 
	}

	public function update($tablepk, $data){
		$this->db->where("id", $tablepk);
		$this->db->update("user_tbl", $data);
	}

	public function delete($tablepk){
		$this->db->delete("user_tbl", array("id" => $tablepk)); 
	}
}
?>
