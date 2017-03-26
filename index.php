<?php

//echo "Hello World!";

use Codebird\Codebird;
require "vendor/autoload.php";

Codebird::setConsumerKey("oOIvG3iupgG8jKkh3EFcqIyms", "lTON57gXhUM2RYcT0smKZUIGWzX1TvncUctkcz78LPNJuDi6yw");

$cb = Codebird::getInstance();
$cb->setReturnFormat(CODEBIRD_RETURNFORMAT_ARRAY);

$cb->setToken("840466523324055552-WX3NyVAzKsT85BqY9mAvl6lqamRSUMJ", "gGFcHxhDIA1iyCAhNqp9VczBqUKv5ggS6w5Vr61D4FeYt");

$mentions = $cb->statuses_mentionsTimeline();
$tweets = (array) $cb->statuses_homeTimeline();

echo "<pre>";
print_r($tweets);

foreach ($tweets as $key => $tweet) {
	if(isset($tweet['id']) && preg_match("/campusforgbpec/i", $tweet['text']))
		$theTweet = $tweet['id'];
		echo $tweet['text'] . "<br><br>";
		$response = $cb->statuses_retweet_ID(array('id' => $theTweet));
}

//$response = $cb->statuses_retweet_ID(array('id' => '845964818154610688'));

/*echo "<pre>";
print_r($tweets);
var_dump($mentions);
*/