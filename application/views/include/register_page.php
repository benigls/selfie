<?php 
echo'
				  <div class="panel-body">
				    <div class="container">
						<table class="table table-responsive">';
							echo form_open("pendinguser_controller/register");
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
									  <span class="input-group-addon" id="basic-addon1">Email: </span>';
									   echo form_input(array("name" => "username", "class" => "form-control", "placeholder" => "Username", "aria-describedby" => "basic-addon1"));
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
									  echo form_input(array("name" => "dateofterm", "class" => "form-control", "placeholder" => "2013 - 2014", "aria-describedby" => "basic-addon1"));
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
 ?>