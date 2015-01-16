<?php

require_once("lib/TwitterOAuth.php");

class Twitter{
		public function get_links($hashtag, $date){
			$consumer = "PwfrLhnKE1BQNd2ORtsMHxVYS";
			$consumersecret = "TNkXNhiFUPovYQESaHe4rYGQMe2OVBP0VYVqhJ9dKSotfdncex";
			$accesstoken = "2263639741-q5TcDLrezY94wnVBFpngBEi1YeOPd28btfESmb3";
			$accesstokensecret = "1u2mNZJp85l3RfW1tCUHyurkwe5AEfvHjqhzgxEAMFU6Y";

			$twitterVar = new TwitterOAuth($consumer, $consumersecret, $accesstoken, $accesstokensecret);
			$tweetIDs = array();


			$linkRegEx = "/(http|https|ftpftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			$eventDate = $date;
			$tweets = $twitterVar->get('https://api.twitter.com/1.1/search/tweets.json?q='
				. urlencode($hashtag)
				. '&result_type=mixed&count=100&include_entities=true&filter:images&since:'
				. $eventDate);	
			
			if (isset($tweets->statuses) && is_array($tweets->statuses)) {
			    if (count($tweets->statuses)) {
			        foreach ($tweets->statuses as $tweet) {
						$tweetIDs[] = $tweet->id_str;
			        }
			    }
			}	
			return $tweetIDs;
		}		
	}
?>
