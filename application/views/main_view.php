<!DOCTYPE html>
<html lang="en">
		<?php include_once("include/head.php"); ?>
		<body>

		<?php 
		include_once("include/navbar.php");
		$data["content"] = $content;  
		$data["results"] = $results;     
		$this->view("content.php", $data);   
		include_once("include/footer.php");     
		echo'<script src="<?php echo base_url();?>public/js/script.js"></script>';
		?>
	</body>
</html>