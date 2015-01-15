<?php  
class Dataaccess_pendinguser extends CI_Model{
	public function view_all(){
		$query = $this->db->get("pendinguser_tbl");
		return $query->result();
	}

	public function insert($data){
		$this->db->insert("pendinguser_tbl", $data); 
	}

	public function update($tablepk, $data){
		$this->db->where("pending_id", $tablepk);
		$this->db->update("pendinguser_tbl", $data);
	}

	public function delete($tablepk){
		$this->db->delete("pendinguser_tbl", array("pending_id" => $tablepk)); 
	}
}
?>
