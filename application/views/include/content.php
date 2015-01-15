<?php 
	switch($content) {
		case "home":

			break;
		case "login":
			echo'
		  <div class="panel-body">
		    <div class="container">
				<table class="table table-responsive">';
					echo form_open("home/insert_movie");
					echo'
					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Username</span>';
							   echo form_input(array("name" => "username", "class" => "form-control", "aria-describedby" => "basic-addon1"));
							   echo'
							</div>
						</td>
					</tr>	
					<tr>
						<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Password:</span>';
							   echo form_password(array("name" => "password", "class" => "form-control", "aria-describedby" => "basic-addon1"));
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
	
			break;
	}
?>