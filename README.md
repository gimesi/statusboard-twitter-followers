# Status Board Twitter Followers
Show the number of followers of a *Twitter* account on your *Panic Status Board*.

## How to use it
1. Go to Twitter's [developer website](https://dev.twitter.com/apps), log in, set up a new app and then note following info: *oauth_access* & *oauth_access secret* tokens, *consumer* & *consumer secret* keys.
2. Download **statusboard-twitter-followers.php** and enter above info accordingly in lines 24 to 27.
3. Enter your Twitter name at line 31.
4. Download **TwitterAPIExchange.php** from [https://github.com/J7mbo/twitter-api-php](https://github.com/J7mbo/twitter-api-php).
5. Upload both files to your server.
6. On your iPad: Open Status Board, add a DIY panel (the one with the "< >" symbols), tap on it and enter the path to the files on your server. (http://example.com/path/to/statusboard-mailchimp-subscribers.php)
7. Be happy.

## For minimalists
If you only want the php function without the styling stuff, here is the [snippet on Gist](https://gist.github.com/gimesi/6534670).

## Notes
- This is just a minimal 3-minute-example. Of course you can change, modify, adapt and go crazy with it.
- The script is primarily intended for my personal use and is provided **"as is"**. I have no plans of making updates on a regular basis. There's no warranty expressed or implied. Use it at your own risk.
- Anyway, if you have suggestions, corrections, or just want to say hello, please feel free to drop me a line on Twitter ([@gimesi](http://twitter.com/gimesi)).

## Dependencies & Credits
This script relies on the "Twitter API" wrapper by James Mallison which can be found at https://github.com/J7mbo/twitter-api-php

The way how to get a follower count was posted by Amal Murali on *Stackoverflow* and can be found at http://stackoverflow.com/questions/17409227/follower-count-number-in-twitter