<?php
 	require_once("lib/TwitterOAuth.php");

	$consumer = "PwfrLhnKE1BQNd2ORtsMHxVYS";
	$consumersecret = "TNkXNhiFUPovYQESaHe4rYGQMe2OVBP0VYVqhJ9dKSotfdncex";
	$accesstoken = "2263639741-q5TcDLrezY94wnVBFpngBEi1YeOPd28btfESmb3";
	$accesstokensecret = "1u2mNZJp85l3RfW1tCUHyurkwe5AEfvHjqhzgxEAMFU6Y";

	$twitter = new TwitterOAuth($consumer, $consumersecret, $accesstoken, $accesstokensecret);
	$links = array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	class twitter{
		public function get_links($hashtag, $date){
			$matches;
			$linkRegEx = "/(http|https|ftpftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			$eventDate = $date; //day of the event (YYYY-MM-DD)
			$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='
				. urlencode($hashtag)
				. '&result_type=mixed&count=10&include_entities=true&filter:images&since:'
				. $eventDate);	
			
			if (isset($tweets->statuses) && is_array($tweets->statuses)) {
			    if (count($tweets->statuses)) {
			        foreach ($tweets->statuses as $tweet) {						
						if (preg_match($linkRegEx, $tweet->text, $matches)) {
							$links[] = $matches[0];
						}
			        }
			    }
			}	
			return $links
		}
		
	}
		?>
</body>
</html>