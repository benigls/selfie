<div class="container" style="margin-top:30px; margin-bottom: 30px;">
<?php echo form_open("pendinguser_controller/register"); ?>
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
				<div class="form-group">
					<?php echo form_input(array("name" => "firstname","id" => "firstname", "class" => "form-control input-lg", "placeholder" => "First Name", "aria-describedby" => "basic-addon1", "tabindex"=>"1")); ?>
				</div>
				<div class="form-group">
					<?php echo form_input(array("name" => "middlename","id" => "middlename", "class" => "form-control input-lg", "placeholder" => "Middle Name", "aria-describedby" => "basic-addon1", "tabindex"=>"2")); ?>
				</div>	
				<div class="form-group">
					<?php echo form_input(array("name" => "lastname","id" => "lastname", "class" => "form-control input-lg", "placeholder" => "Last Name", "aria-describedby" => "basic-addon1", "tabindex"=>"3")); ?>
				</div>
				
			
				<div class="form-group">
					<?php echo form_input(array("name" => "username","id" => "username", "class" => "form-control input-lg", "placeholder" => "Username", "aria-describedby" => "basic-addon1", "tabindex"=>"4")); ?>
				</div>
				<div class="form-group">
					<?php echo form_input(array("name" => "email","id" => "email", "class" => "form-control input-lg", "placeholder" => "Email Address", "aria-describedby" => "basic-addon1", "tabindex"=>"5")); ?>
				</div>
				
				<div class="form-group">
					<?php echo form_input(array("name" => "address","id" => "address", "class" => "form-control input-lg", "placeholder" => "Address", "aria-describedby" => "basic-addon1", "tabindex"=>"6")); ?>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<?php echo form_password(array("name" => "password", "id" => "confirmpassword", "class" => "form-control", "placeholder" => "Password", "aria-describedby" => "basic-addon1", "tabindex" => "7")); ?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<?php echo form_password(array("name" => "confirmpassword", "id" => "confirmpassword", "class" => "form-control", "placeholder" => "Confirm Password", "aria-describedby" => "basic-addon1", "tabindex" => "8")); ?>
							
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">	
						<?php echo form_button(array("name" => "agree", "class"=>"btn", "data-color"=>"info", "tabindex"=>"9", "content"=>"I Agree"));
							  echo form_checkbox(array("name" =>"t and c", "id"=>"t_and_c", "class"=>"hidden", "value"=>"1" ));
						 ?>					
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <?php echo anchor("#", "Terms and Condition", array("data-toggle"=>"modal", "data-target"=>"#t_and_c_m")); ?> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">

				<div class="col-xs-12 col-md-6">
					<?php echo form_submit(array("name" => "register", "value" => "Register", "class" => "btn btn-primary btn-block btn-lg", "tabindex"=>"10"));  ?>
				</div>
				<div class="col-xs-12 col-md-6">
					<?php echo anchor("main_controller/login", "Login", array("class"=> "btn btn-success btn-block btn-lg")) ?>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<?php echo form_button(array("name" => "agree", "class"=>"btn btn-primary", "data-dismiss"=>"modal", "content"=>"I Agree")); ?>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>