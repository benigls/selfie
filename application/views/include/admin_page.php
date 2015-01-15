		<table> 
			<!-- Table Headers -->
			<?php echo form_open("main_controller/admin"); ?>
			<th>Email</th>
			<th>Password</th>
			<th>First name</th>
			<th>Middle name</th>
			<th>Last name</th>
			<th>Address</th>
			<th>Date of Term</th>
			<!-- Table Date -->
			<tr>
				<td>sanjuanjojo6@yahoo.com</td>
				<td>asd</td>
				<td>jose</td>
				<td>robles</td>
				<td>sanjuan</td>
				<td>morong</td>
				<td>2013</td>
				<td><?php   echo form_submit(array("name" => "accept", "value" => "Accept", "class" => "btn btn-primary"));	
				    		echo form_submit(array("name" => "reject", "value" => "Register", "class" => "btn btn-primary"));
				      ?></td>
			</tr>

		</table>