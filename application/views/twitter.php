<?php
 	require_once("lib/TwitterOAuth.php");

	$consumer = "PwfrLhnKE1BQNd2ORtsMHxVYS";
	$consumersecret = "TNkXNhiFUPovYQESaHe4rYGQMe2OVBP0VYVqhJ9dKSotfdncex";
	$accesstoken = "2263639741-q5TcDLrezY94wnVBFpngBEi1YeOPd28btfESmb3";
	$accesstokensecret = "1u2mNZJp85l3RfW1tCUHyurkwe5AEfvHjqhzgxEAMFU6Y";

	$twitter = new TwitterOAuth($consumer, $consumersecret, $accesstoken, $accesstokensecret);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label>
			Search: <input type="text" name="keyword"/>
		</label>
	</form>
	<pre>
		<?php 
			if(isset($_POST['keyword'])) {
				$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.urlencode($_POST['keyword']).'&result_type=mixed&count=100&include_entities=true');	
				foreach ($tweets as $tweet) {
					foreach ($tweet as $t) {
						$text = $t->text;
						$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

						if(preg_match($reg_exUrl, $text, $url)) {
							echo "<h4>".$t->text."</h4><br/>";
						    echo preg_replace($reg_exUrl, "<img src=". $url[0] .">", $text);
						}
					}
					# code...
				}
			}
		 ?>
	</pre>
	
	
</body>
</html>
