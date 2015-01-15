<?php 
	switch($content) {
		case "home":

			break;
		case "login":
			echo'
		  <div class="panel-body">
		    <div class="container">
				<table class="table table-responsive">';
					echo form_open("main_controller/login");
					echo'
					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Email: </span>';
							   echo form_input(array("name" => "email", "placeholder" => "Email", "class" => "form-control", "aria-describedby" => "basic-addon1"));
							   echo'
							</div>
						</td>
					</tr>	
					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Password: </span>';
							   echo form_password(array("name" => "password", "placeholder" => "Password", "class" => "form-control", "aria-describedby" => "basic-addon1"));
							  echo'
							</div>
						</td>
					</tr>
						<td>
				</table>
			</div>
		  </div>
		</div>
		<div class="panel panel-info">
		  <div class="panel-body" align = "center">';
		    echo form_submit(array("name" => "my_login", "value" => "Login", "class" => "btn btn-primary"));	
		    echo form_submit(array("name" => "clear", "value" => "Clear", "class" => "btn btn-primary"));
		    echo'
		  </div>
		</div>';
			break;
		case "register";
				echo'
		  <div class="panel-body">
		    <div class="container">
				<table class="table table-responsive">';
					echo form_open("main_controller/register");
					echo'
					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Email: </span>';
							   echo form_input(array("name" => "email", "class" => "form-control", "placeholder" => "Email", "aria-describedby" => "basic-addon1"));
							   echo'
							</div>
						</td>
					</tr>	
					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Password: </span>';
							   echo form_password(array("name" => "password", "class" => "form-control", "placeholder" => "Password", "aria-describedby" => "basic-addon1"));
							  echo'
							</div>
						</td>
					</tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">First Name: </span>';
							   echo form_input(array("name" => "firstname", "class" => "form-control", "placeholder" => "First Name", "aria-describedby" => "basic-addon1"));
							echo '</div>
						</td>
					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Middle Name: </span>';
							  echo form_input(array("name" => "middlename", "class" => "form-control", "placeholder" => "Middle Name", "aria-describedby" => "basic-addon1"));
							  echo'
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Last Name: </span>';
							  echo form_input(array("name" => "lastname", "class" => "form-control", "placeholder" => "Last Name", "aria-describedby" => "basic-addon1"));
							  echo'
							</div>
						</td>
					</tr>

					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Address: </span>';
							  echo form_input(array("name" => "address", "class" => "form-control", "placeholder" => "Address", "aria-describedby" => "basic-addon1"));
							  echo'
							</div>
						</td>
					</tr>


					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Date of Term: </span>';
							  echo form_input(array("name" => "dateofterm", "class" => "form-control", "placeholder" => "Date of Term", "aria-describedby" => "basic-addon1"));
							  echo'
							</div>
						</td>
					</tr>
				</table>
			</div>
		  </div>
		</div>
		<div class="panel panel-info">
		  <div class="panel-body" align = "center">';
		    echo form_submit(array("name" => "register", "value" => "Register", "class" => "btn btn-primary"));	
		    echo form_submit(array("name" => "clear", "value" => "Clear", "class" => "btn btn-primary"));
		    echo'
		  </div>
		</div>';
			break;
	}
?>