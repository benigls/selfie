<?php  

class Event_model extends MY_Model{
	public function addevent($id){
		$data = array(
			"user_id" => $id,
			"event_name" => $this->input->post("name"),
			"event_date" => $this->input->post("date"),
			"event_description" => $this->input->post("eventdesc"),
			"hashtag" => $this->input->post("hashtag")
		);
		$this->insert("event_tbl", $data);
	}
}
?>
