<!DOCTYPE html>
<html lang="en">
		<?php include_once("include/head.php"); ?>
		<body>

		<?php 
		echo'
		<nav class="navbar navbar-default navbar-fixed-top" >
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a>';
		            echo anchor("main_controller", "<strong style = 'font-size:35px;'>Selfie</strong>", array("class"=>"navbar-brand"));
		        echo'</div>';

		        
		        if ($this->session->userdata('logged_in') == FALSE) {
		         echo'
		         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav navbar-right">
		                <li>'; echo anchor("main_controller/viewevents", "View Events"); echo'</li>
		                <li>'; echo anchor("main_controller/login", "Login"); echo '</li>
		                <li>'; echo anchor("main_controller/register", "Register"); echo'</li>

		            </ul>
		        </div>';
		        }
		        else{
		                 echo'
		                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                    <ul class="nav navbar-nav navbar-right">';
		            if ($this->session->userdata('login_type') == 'admin') {
		                echo '<li>'; echo anchor("main_controller/","Home"); echo "</li>";
		            }
		            else if ($this->session->userdata('login_type') == 'sudoadmin') {
		                echo '<li>'; echo anchor("main_controller/","Home"); echo "</li>";
		                echo '<li>'; echo anchor("main_controller/addevent".$id."","Add Event"); echo "</li>";
		            }
		                        echo '<li>'; echo anchor("main_controller/logout", "Logout"); echo'</li>
		                    </ul>
		                </div>
		               ';         
		        }
		        echo'
		    </div>
		   
		</nav>';

		
		$data["content"] = $content;  
		$data["results"] = $results;
		$data["id"] = $id;
		$this->view("content.php", $data);   
		include_once("include/footer.php");
		include_once("include/scripts.php");
		?>';
	</body>
</html>