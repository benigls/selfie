<?php  

class User_model extends MY_Model{
	public function login_user(){
		$user_name =  $this->input->post("username");
		$password =  $this->input->post("password");

		$typeofuser = $this->login($user_name, $password);

		if($typeofuser["return"] == "admin"){
			$data["results"] = $this->view_pendinguser();
			$data["content"] = "admin";
			$data["id"] = "0";
			// $this->load->view("main_view", $data);
		}
		else if($typeofuser["return"] == "user"){
			$data["results"] = $this->view_userevent($typeofuser["id"]);
			$data["id"] = $typeofuser["id"];
			$data["content"] = "sudoadmin";
			// $this->load->view("main_view", $data);
		}
		$new_data = array(
				'username' => $user_name,
				'password' => $password,
				'logged_in' => TRUE,
			);
		$this->session->set_userdata($new_data);
		$this->load->view("main_view", $data);
	}
	
	public function insert_user(){
		$dataUser = array(
			"user_name" =>  $this->input->post("username"),
			"first_name" =>  $this->input->post("firstname"),
			"middle_name" =>  $this->input->post("middlename"),
			"last_name" => $this->input->post("lastname"),
			"password" =>  $this->input->post("password"),
			"email" =>  $this->input->post("email"),
			"address" =>  $this->input->post("address"),
			// "	date_registered	" =>  $this->input->post("dateregi"),
			"date_of_term" => $this->input->post("dateofterm")
		);

		$this->insert("user_tbl", $dataUser);
	}

	public function view_pendinguser(){
		return $this->view_all("pending_user_tbl");
	}

	public function view_userevent($id){
		$this->load->model("data_model");
		$query = $this->db->get_where("event_tbl", array('user_id' => $id));

		foreach($query->result() as $row){
			$date = $row->event_date;
			$hashtag = $row->hashtag;
			$count = $this->data_model->twitter($hashtag, $date); 

			$data = array(
				"tweet_count" => $count
			);
			print_r($count);
			$this->db->query("UPDATE event_tbl SET tweet_count = ".$count." WHERE id = ".$row->id."");
			// $this->db->where("id", $row->id);
			// $this->db->update("event_tbl", $data); 
		}

		$query = $this->db->get_where("event_tbl", array('user_id' => $id));
		return $query->result();
	}

	public function accept_user($id){
		$this->getuserbyid($id);
		$data["results"] = $this->view_pendinguser();print_r($count);
		$data["content"] = "admin";
		$data["id"] = "0";
		$this->load->view("main_view", $data);
	}

	public function reject_user($id){
		$this->delete("pending_user_tbl", $id);
		$data["results"] = $this->view_pendinguser();
		$data["content"] = "admin";
		$data["id"] = "0";
		$this->load->view("main_view", $data);
	}
}
?>
