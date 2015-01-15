<?php 
	switch($content) {
		case "home":
			include_once("include/home.php");
			break;
		case "login":
			include_once("include/login_page.php");
			break;
		case "register";
			include_once("include/register_page.php");
			break;
		case "admin";
			echo form_open("user_controller/login");
			echo '
			<div class = "container">
				<div class = "row">
				<h4>Seek\'s for Approval</h4>
				<div class="table-responsive">
					<table id="mytable" class="table table-bordred table-striped">
					<thead>
						<th>ID</th>
						<th>Username</th>
						<th>First name</th>
						<th>Middle name</th>
						<th>Last name</th>
						<th>Password</th>
						<th>Email</th>
						<th>Address</th>
						<th>Date of Term</th>
					</thead>';

						
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
						echo'<td>';
						echo anchor('user_controller/acceptid/'.$records->id.'', 'Accept',(array("class" => ""))); echo"&nbsp&nbsp"; 
						echo'</td><td>';
						echo anchor('user_controller/rejectid/'.$records->id.'', 'Reject',(array("class" => ""))); 
						echo'</td>
					</tr>';
					}

					echo form_close();
					echo '	</table>

						</div>
						</div>
					</div>
					<div style="margin-bottom:70px;"></div>';

				break;	

			case "sudoadmin";
				echo '<div class="container">
		    
		    	<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Your Events</h3>
								<div class="pull-right">
									<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
									</span>
								</div>
							</div>
							<div class="panel-body">
								<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
							</div>
							<table class="table table-hover" id="dev-table">
								<thead>
									<tr>';
										echo form_open("user_controller/login");
										echo '
										<th>ID</th>
										<th>Event name</th>
										<th>Event date</th>
										<th>Event Description</th>
										<th>Hashtag</th>';
					
								echo '</tr>
								</thead>
								<tbody>';
									foreach($results as $records) {
									echo'<tr>
											<td>'.$records->id.'</td>
											<td>'.$records->event_name.'</td>
											<td>'.$records->event_date.'</td>
											<td>'.$records->event_description.'</td>
											<td>'.$records->hashtag.'</td></tr>';

									}
								echo '</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>';
			echo form_close();
			echo anchor("main_controller/addevent/".$id."", "<strong style = 'font-size:35px;'>Add Event</strong>", array("class"=>"navbar-brand"));
			break;

		case "addevent_page";
			echo '<div class="row" style="margin-top:50px;">
			<div class="col-md-8 col-md-offset-2">';
			echo form_open("event_controller/add_event/".$id."", array("class"=>"form-horizontal", "role"=>"form"));
	        echo'<fieldset>
			          <!-- Form Name -->
			          <legend>Add Event</legend>

			          <!-- Text input-->
			          <div class="form-group">
			            <label class="col-sm-2 control-label" for="textinput">Name of Event</label>
			            <div class="col-sm-10">';
			              echo form_input(array("name" => "name", "class" => "form-control", "placeholder" => "Event Name", "aria-describedby" => "basic-addon1"));
			             
			            echo'</div>
			          </div>

			          <!-- Text input-->
			          <div class="form-group">
			            <label class="col-sm-2 control-label" for="textinput">Date of Event</label>
			            <div class="col-sm-10">';
			             echo form_input(array("name" => "date", "class" => "form-control", "placeholder" => "YYYY-MM-DD", "aria-describedby" => "basic-addon1"));
			            echo'</div>
			          </div>


			          <!-- Text input-->
			          <div class="form-group">
			            <label class="col-sm-2 control-label" for="textinput">Hashtag</label>
			            <div class="col-sm-10">';
			             echo form_input(array("name" => "hashtag", "class" => "form-control","rows"=>"5", "placeholder" => "#HashtagEvemt", "aria-describedby" => "basic-addon1", "style"=>"resize:none;"));
			             echo '
			            </div>
			          </div>

			          <!-- Text input-->
			          <div class="form-group">
			            <label class="col-sm-2 control-label" for="textinput">Event Description</label>
			            <div class="col-sm-10">';
			         	 echo form_textarea(array("name" => "eventdesc", "class" => "form-control","rows"=>"5", "placeholder" => "Description of Event", "aria-describedby" => "basic-addon1", "style"=>"resize:none;"));
			             
			            echo '</div>
			          </div>


			          <div class="form-group">
			            <div class="col-sm-offset-2 col-sm-10">
			              <div class="pull-right">';
			              	        
			                // echo anchor("event_controller/add_event/".$id."", "<strong style = 'font-size:15px;'>Add Event</strong>", array("class"=>"btn btn-primary", "name" => "add_event"));            
			              	 echo form_submit(array("name" => "add_event", "value" => "Add Event", "class" => "btn btn-primary")); 
			                   echo"&nbsp;&nbsp;";
			                    echo form_submit(array("name" => "clear", "value" => "Clear", "class" => "btn btn-primary")); 
			                    echo form_close();
			    
			              echo'</div>
			            </div>
			          </div>
			        </fieldset>
			      </form>
			    </div><!-- /.col-lg-12 -->
			</div><!-- /.row -->
			<div style=	"margin-bottom:70px;"></div>';
			break;
	}//end of switch

	if(isset($_POST["tempID"])) echo $_POST["tempID"];
?>