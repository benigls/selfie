<?php 
			echo'
				  <div class="panel-body">
				    <div class="container">
						<table class="table table-responsive">';
							echo form_open("user_controller/login");
							echo'
							<tr>
								<td>
									<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1">Username: </span>';
									   echo form_input(array("name" => "username", "placeholder" => "Email", "class" => "form-control", "aria-describedby" => "basic-addon1"));
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

 ?>