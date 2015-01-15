  <div class="row" style="margin-top:50px;">
    <div class="col-md-8 col-md-offset-2">
      <?php echo form_open("event_controller/add_event/".$id."", array("class"=>"form-horizontal", "role"=>"form")); ?>
        <fieldset>

          <!-- Form Name -->
          <legend>Add Event</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Name of Event</label>
            <div class="col-sm-10">
              <?php echo form_input(array("name" => "event_name", "class" => "form-control", "placeholder" => "Event Name", "aria-describedby" => "basic-addon1")); ?>
             
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Date of Event</label>
            <div class="col-sm-10">
              <?php echo form_input(array("name" => "event_date", "class" => "form-control", "placeholder" => "MM/DD/YYYY", "aria-describedby" => "basic-addon1")); ?>
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Event Description</label>
            <div class="col-sm-10">
         	   <?php echo form_textarea(array("name" => "eventdesc", "class" => "form-control","rows"=>"5", "placeholder" => "Description of Event", "aria-describedby" => "basic-addon1", "style"=>"resize:none;")); ?>
             
            </div>
          </div>

                    <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Hashtag</label>
            <div class="col-sm-10">
             <?php echo form_textarea(array("name" => "hashtag", "class" => "form-control","rows"=>"5", "placeholder" => "Description of Event", "aria-describedby" => "basic-addon1", "style"=>"resize:none;")); ?>
             
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
              	<?php         
                echo anchor("event_controller/add_event/".$id."", "<strong style = 'font-size:15px;'>Add Event</strong>", array("class"=>"btn btn-primary", "name" => "add_event"));            
              		// echo form_submit(array("name" => "add_event", "value" => "Add Event", "class" => "btn btn-primary")); 
                   echo"&nbsp;&nbsp;";
                    echo form_submit(array("name" => "clear", "value" => "Clear", "class" => "btn btn-primary")); 
                    echo form_close();
                ?>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->