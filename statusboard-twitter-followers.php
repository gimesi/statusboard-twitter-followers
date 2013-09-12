<?php 

/*
 * statusboard-twitter-followers - Show the number of followers of a Twitter account on your Panic Status Board.
 * https://github.com/gimesi/statusboard-twitter-followers
 * author: Thomas Gimesi < Twitter: @gimesi >
 *
 * NO WARRANTY EXPRESSED OR IMPLIED. USE AT YOUR OWN RISK.
 * 
 * Contains modified html/css based on Panic Status Board's DIY example,
 * and requires the 
 * "Twitter API" wrapper by James Mallison 
 * to be found at https://github.com/J7mbo/twitter-api-php
 *
 * The way how to get a follower count was posted by Amal Murali
 * on http://stackoverflow.com/questions/17409227/follower-count-number-in-twitter
 * For further info on Status Board see http://panic.com/statusboard
 */

require_once('TwitterAPIExchange.php'); 										// adjust server path accordingly

// GET YOUR TOKENS AND KEYS at https://dev.twitter.com/apps/
$settings = array(
'oauth_access_token' => "YOUR_ACCESS_TOKEN",									// enter your data here
'oauth_access_token_secret' => "YOUR_ACCESS_TOKEN_SECRET",						// enter your data here
'consumer_key' => "YOUR_CONSUMER_KEY",											// enter your data here
'consumer_secret' => "YOUR_CONSUMER_KEY_SECRET"									// enter your data here
);

$ta_url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=YOURNAME';											// enter your twitter name without the "@" here
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$follow_count=$twitter->setGetfield($getfield)
->buildOauth($ta_url, $requestMethod)
->performRequest();
$data = json_decode($follow_count, true);
$followers_count = $data[0]['user']['followers_count'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
		<meta http-equiv="Cache-control" content="no-cache" />
		<style type="text/css">
			@font-face { font-family: "Roadgeek2005SeriesD";
						 src: url("http://panic.com/fonts/Roadgeek 2005 Series D/Roadgeek 2005 Series D.otf"); }		
			body, * { }
			body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, th, td { margin: 0;
			                                                                                                                         padding: 0; }
			fieldset, img { border: 0; }
			html, body, #main { overflow: hidden; }
			body { color: white;
			       font-family: 'Roadgeek2005SeriesC', sans-serif;
			       font-size: 24px;
			       line-height: 28px; }
			body, html, #main { background: transparent !important; }
			#container { width: 250px;
			             height: 250px;
			             text-align: center; }
			#container * { font-weight: normal; }
			h1 { font-size: 100px;
			     line-height: 120px;
			     margin-top: 15px;
			     margin-bottom: 28px;
			     color: white;
			     text-shadow: 0px -2px 0px black;
			     text-transform: uppercase; }
			h2 { width: 180px;
			     margin: 0px auto;
			     padding-top: 20px;
			     font-size: 20px;
			     line-height: 22px;
			     color: #7e7e7e;
			     text-transform: uppercase; }
			h2 span { font-size: 24px;
			          color: white; }
		</style>
	</head>
	<body onload="init()">
		<div id="main">
			<div id="container">
				<h2>Followers on<br /><span>Twitter</span></h2>
				<h1><?php echo $followers_count; ?></h1>
			</div>
		</div>
	</body>
</html>
