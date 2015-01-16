<?php include_once("include/scripts.php"); ?>
<script>
	$.getJSON("user_controller/login", function response(response) {
		console.log(response.tweetsId);
	});
</script>