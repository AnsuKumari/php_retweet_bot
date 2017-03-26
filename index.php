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

foreach ($tweets as $key => $tweet)
	if(isset($tweet['id']) && preg_match("/campusforgbpec/i", $tweet['text']))
		echo $tweet['text'] . "<br><br>";