<?php  

class Event_model extends MY_Model{
	public function addevent($id){
		$this->load->model("data_model");
		$date = $this->input->post("date");
		$hashtag = $this->input->post("hashtag");

		$count = $this->data_model->twitter($hashtag, $date); 
		$data = array(
			"user_id" => $id,
			"event_name" => $this->input->post("name"),
			"event_date" => $date,
			"event_description" => $this->input->post("eventdesc"),
			"hashtag" => $hashtag,
			"tweet_count" => $count
		);
		$this->insert("event_tbl", $data);
	}
}
?>
