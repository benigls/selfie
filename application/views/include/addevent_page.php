<div class="panel-body">
				    <div class="container">
						<table class="table table-responsive">
							<?php echo form_open("event_controller/add_event"); ?>
							
							<tr>
								<td>
									<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1">Name of Event: </span>
									   <?php echo form_input(array("name" => "event_name", "class" => "form-control", "placeholder" => "Event Name", "aria-describedby" => "basic-addon1")); ?>
									   
									</div>
								</td>
							</tr>	

							<tr>
								<td>
									<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1">Date of Event: </span>
									  <?php echo form_input(array("name" => "event_date", "class" => "form-control", "placeholder" => "yyyy/mm/dd", "aria-describedby" => "basic-addon1")); ?>
									  
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1">Event Description: </span>
									  <?php echo form_textarea(array("name" => "middlename", "class" => "form-control", "placeholder" => "Description of Event", "aria-describedby" => "basic-addon1")); ?>
									  
									</div>
								</td>
							</tr>
		
						</table>
					</div>
				  </div>
				</div>
				<div class="panel panel-info">
				  <div class="panel-body" align = "center">
				  <?php  
				  	echo form_submit(array("name" => "add_event", "value" => "Add Event", "class" => "btn btn-primary"));	
				    echo form_submit(array("name" => "clear", "value" => "Clear", "class" => "btn btn-primary"));
				    ?>
				  </div>
				</div>