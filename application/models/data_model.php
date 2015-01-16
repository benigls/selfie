<?php  
class Data_model extends MY_Model{

	// public function count_data($eventid){
	// 	$query = $this->db->get_where("data_tbl", array('id' => $eventid));
	// 	$rowcount = $query->num_rows();
	// 	return $rowcount;
	// }
	
	public function twitter($hashtag, $date){
		$this->load->model("twitter");
		$links = array();

		$links = $this->twitter->get_links($hashtag, $date);
		$count = 0;
		foreach($links as $link){
			$count++;
		};
		return $count;
	}

	public function twitterlinks($hashtag, $date){
		$this->load->model("twitter");
		$links = array();
		$links = $this->twitter->get_links($hashtag, $date);
		
		return $links;
	}
}
?>
