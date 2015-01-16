<?php 
	switch($content) {
		case "home":
			include_once("include/home.php");
			break;
		case "login":
			include_once("include/login_page.php");
			break;
		case "register":
			include_once("include/register_page.php");
			break;
		case "viewevent":
			include_once("include/viewevent_page.php");
			break;
		case "admin":
			//check session
			if ($this->session->userdata('logged_in') == FALSE) {
				echo '<div class="alert alert-danger"> Log in first </div>';
			}
			else {
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
				}
				break;	

			case "sudoadmin":
				echo '<div class="container">
		    
		    	<div class="row">
					<div class="col-md-10 col-md-offset-1">
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
										<th>Hashtag</th>
										<th>Tweets</th>';
					
								echo '</tr>
								</thead>
								<tbody>';
									foreach($results as $records) {
									echo'<tr>
											<td>'.$records->id.'</td>
											<td>'.$records->event_name.'</td>
											<td>'.$records->event_date.'</td>
											<td>'.$records->event_description.'</td>
											<td>'.$records->hashtag.'</td>
											<td>'.$records->tweet_count.'</td></tr>';

									}
								echo '</tbody>
							</table>
						</div>
				</div>
			</div></div>';
			echo form_close();
			echo'
				<div class="col-sm-offset-1 col-sm-10">
				<div class="pull-right">';
			echo anchor("main_controller/addevent/".$id."", "Add Event", array("class"=>"btn btn-primary btn-block btn-lg"));
			echo '</div>
				</div>';
			break;

		case "addevent_page":
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
			case "tweet1";
			// 
				echo'
				<div class = "row">
					<div class = "container">
						<div class = "col-lg-4">
							<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/hashtag/McdoMoment?src=hash">#McdoMoment</a> <a href="https://twitter.com/hashtag/ShapingDavos?src=hash">#ShapingDavos</a> <a href="https://twitter.com/hashtag/HacktheSK?src=hash">#HacktheSK</a> <a href="http://t.co/6JnMg87zB8">pic.twitter.com/6JnMg87zB8</a></p>&mdash; José (@josersjq) <a href="https://twitter.com/josersjq/status/555579548289343489">January 15, 2015</a></blockquote>
						</div>
						<div class = "col-lg-4">
							<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/JecelC">@JecelC</a> and Jess Herrera bond over lunch with <a href="https://twitter.com/hashtag/McdoMoment?src=hash">#McdoMoment</a>. Today here at <a href="https://twitter.com/hashtag/MNLShapingDavos?src=hash">#MNLShapingDavos</a>! <a href="http://t.co/YJcWZA1ySR">pic.twitter.com/YJcWZA1ySR</a></p>&mdash; Kathleen Largo (@kathleenlargo) <a href="https://twitter.com/kathleenlargo/status/555591575393157120">January 15, 2015</a></blockquote>
						</div>
						<div class = "col-lg-4">
							<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/hashtag/mcdomoment?src=hash">#mcdomoment</a> of Tiffany!!! <a href="http://t.co/Em8DPglGNH">pic.twitter.com/Em8DPglGNH</a></p>&mdash; Charles Erize Ladia (@charlesladia) <a href="https://twitter.com/charlesladia/status/555586227718467584">January 15, 2015</a></blockquote>
						</div>
					</div>
				</div>

				
				';
				break;
			case "tweet2";
				echo'
				<div class = "row">
					<div class = "container">
						<div class = "col-lg-4">
						<blockquote class="twitter-tweet" lang="en"><p>by shirlock.gale <a href="http://t.co/7ryLhXfXhf">http://t.co/7ryLhXfXhf</a> Missing those times... 🚶🌱 <a href="https://twitter.com/hashtag/fbf?src=hash">#fbf</a> <a href="https://twitter.com/hashtag/cmu?src=hash">#cmu</a> <a href="https://twitter.com/hashtag/treeplanting?src=hash">#treeplanting</a> <a href="http://t.co/4dqzqy2tEg">pic.twitter.com/4dqzqy2tEg</a></p>&mdash; TreePlanters (@TreePlantingbot) <a href="https://twitter.com/TreePlantingbot/status/555891944400752640">January 16, 2015</a></blockquote>	
						</div>
						<div class = "col-lg-4">
						<blockquote class="twitter-tweet" lang="en"><p>Flashback ❤ <a href="https://twitter.com/hashtag/TreePlanting?src=hash">#TreePlanting</a> #2014 <a href="https://twitter.com/hashtag/ScienceClub?src=hash">#ScienceClub</a> <a href="http://t.co/0FC61EGuUN">pic.twitter.com/0FC61EGuUN</a></p>&mdash; Laremae Sumalinog (@mae_braps) <a href="https://twitter.com/mae_braps/status/555523518310273025">January 15, 2015</a></blockquote>	
						</div>
						<div class = "col-lg-4">
						<blockquote class="twitter-tweet" lang="en"><p>by jamesdoblado <a href="http://t.co/Bb01MaTNYE">http://t.co/Bb01MaTNYE</a> Enjoyed 2014! :)&#10;#treeplanting#reunion#Dobladoclan#Barcelona#bisligcity <a href="http://t.co/rGgjrZUf3R">pic.twitter.com/rGgjrZUf3R</a></p>&mdash; TreePlanters (@TreePlantingbot) <a href="https://twitter.com/TreePlantingbot/status/551738444071043072">January 4, 2015</a></blockquote>	
						</div>
					</div>
				</div>
				';
				break;
	}//end of switch

	if(isset($_POST["tempID"])) echo $_POST["tempID"];
?>