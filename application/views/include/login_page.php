<div class="container" style="margin-top:30px;">
<div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open("user_controller/login", array("role" =>"form")) ?>  <!--   <form role="form"> -->
                            <fieldset>
                                <div class="form-group">
                                    <?php  echo form_input(array("name" => "username", "placeholder" => "Email", "class" => "form-control", "aria-describedby" => "basic-addon1", "autofocus" => "")); ?>
      
                                </div>
                                <div class="form-group">
                                <?php echo form_password(array("name" => "password", "placeholder" => "Password", "class" => "form-control", "aria-describedby" => "basic-addon1", "value" => "")); ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <?php echo form_checkbox(array("name" => "remember", "value=" => "accepted")) ?> Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                    <?php echo form_submit(array("name" => "my_login", "value" => "Login", "class" => "btn btn-sm-btnsuccess")); ?>

                            </fieldset>
                        <?php echo form_close() ?>
                        <!-- </form> -->
                    </div>
                </div>
</div>
</div>