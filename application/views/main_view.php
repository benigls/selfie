<!DOCTYPE html>
<html lang="en">
		<?php include_once("include/head.php"); ?>
		<body>

		<?php 
		include_once("include/navbar.php");
		$data["content"] = $content;        
		$this->view("include/content.php", $data);   
		include_once("include/footer.php");     
		?>
	</body>
</html>