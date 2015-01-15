<?php 
	switch($content) {
		case "home":

			break;
		case "login":
			include_once("include/login_page.php");
			break;
		case "register";
			include_once("include/register_page.php");
			break;
		case "admin";
			echo '<table border = "1"> 
			echo form_open("user_controller/admin");
			<th>ID</th>
			<th>Username</th>
			<th>First name</th>
			<th>Middle name</th>
			<th>Last name</th>
			<th>Password</th>
			<th>Email</th>
			<th>Address</th>
			<th>Date of Term</th>';
			
			foreach($results as $records) {
				echo'<tr>
						<td>'.$records->id.'</td>
						<td>'.$records->pending_user_name.'</td>
						<td>'.$records->pending_first_name.'</td>
						<td>'.$records->pending_middle_name.'</td>
						<td>'.$records->pending_last_name.'</td>
						<td>'.$records->pending_password.'</td>
						<td>'.$records->pending_email.'</td>
						<td>'.$records->pending_address.'</td>
						<td>'.$records->pending_date_of_term.'</td>';
						echo '<td colspan = "8"></td>';
						echo '<td>';echo form_submit(array("name" => "accept", "value" => "Accept", "class" => "btn btn-primary"));
						echo form_submit(array("name" => "reject", "value" => "Register", "class" => "btn btn-primary"));echo'</td>';
				echo'</tr>';
			}

				echo form_close();
			echo '</table>';

			break;
		case "sudoadmin";
			include_once("include/sudoadmin_page.php");
			break;
		case "addevent_page":
			include_once("include/addevent_page.php");
			break;
	}	
?>