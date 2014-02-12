An incomplete client for the Twitter API. Implemented so far:

- `GET statuses/mentions_timeline` - `TwitterClient::getMentions`
- `GET statuses/user_timeline` - `TwitterClient::getUserTweets`
- `GET statuses/home_timeline` - `TwitterClient::getHomeTimeline`
- `GET statuses/retweets_of_me` - `TwitterClient::getMyRetweets`
- `GET favorites/list` - `TwitterClient::getUserFavourites`

See https://dev.twitter.com/docs/api/1.1 for implementation of API. Parameters are passed in an array to the relevant methods.

Examples
========

Create client:
```php
<?php
$twitter  = \Tmoitie\Twitter\TwitterClient::factory(array(
    'consumer_key' => '',
    'consumer_secret' => '',
    'token' => '',
    'token_secret' => '',
));
```

Get tweets of user @tmoitie:
```php
<?php
$twitter->getUserTweets(array('screen_name' => 'tmoitie')); //array of tweets
```

This returns an array of tweets, where one tweet is formatted like thus:
```
array (size=22)
  'created_at' => string 'Tue Feb 11 21:13:30 +0000 2014' (length=30)
  'id' => int 433348087675748352
  'id_str' => string '433348087675748352' (length=18)
  'text' => string 'The computer what I built needs an RMA'd motherboard. Le sigh :(' (length=64)
  'source' => string '<a href="http://itunes.apple.com/us/app/twitter/id409789998?mt=12" rel="nofollow">Twitter for Mac</a>' (length=101)
  'truncated' => boolean false
  'in_reply_to_status_id' => null
  'in_reply_to_status_id_str' => null
  'in_reply_to_user_id' => null
  'in_reply_to_user_id_str' => null
  'in_reply_to_screen_name' => null
  'user' => 
    array (size=40)
      'id' => int 9072972
      'id_str' => string '9072972' (length=7)
      'name' => string 'Tom Moitié' (length=11)
      'screen_name' => string 'tmoitie' (length=7)
      'location' => string 'Manchester, UK' (length=14)
      'description' => string 'Writes code. Sometimes well. Bills football is my jam' (length=53)
      'url' => string 'http://t.co/Uk1pSTGIKS' (length=22)
      'entities' => 
        array (size=2)
          'url' => 
            array (size=1)
              ...
          'description' => 
            array (size=1)
              ...
      'protected' => boolean false
      'followers_count' => int 318
      'friends_count' => int 664
      'listed_count' => int 14
      'created_at' => string 'Mon Sep 24 16:43:13 +0000 2007' (length=30)
      'favourites_count' => int 189
      'utc_offset' => int 0
      'time_zone' => string 'London' (length=6)
      'geo_enabled' => boolean true
      'verified' => boolean false
      'statuses_count' => int 9501
      'lang' => string 'en' (length=2)
      'contributors_enabled' => boolean false
      'is_translator' => boolean false
      'is_translation_enabled' => boolean false
      'profile_background_color' => string '131516' (length=6)
      'profile_background_image_url' => string 'http://abs.twimg.com/images/themes/theme14/bg.gif' (length=49)
      'profile_background_image_url_https' => string 'https://abs.twimg.com/images/themes/theme14/bg.gif' (length=50)
      'profile_background_tile' => boolean true
      'profile_image_url' => string 'http://pbs.twimg.com/profile_images/431046586274430976/j52CAOrt_normal.jpeg' (length=75)
      'profile_image_url_https' => string 'https://pbs.twimg.com/profile_images/431046586274430976/j52CAOrt_normal.jpeg' (length=76)
      'profile_banner_url' => string 'https://pbs.twimg.com/profile_banners/9072972/1355479658' (length=56)
      'profile_link_color' => string '009999' (length=6)
      'profile_sidebar_border_color' => string 'EEEEEE' (length=6)
      'profile_sidebar_fill_color' => string 'EFEFEF' (length=6)
      'profile_text_color' => string '333333' (length=6)
      'profile_use_background_image' => boolean true
      'default_profile' => boolean false
      'default_profile_image' => boolean false
      'following' => boolean false
      'follow_request_sent' => boolean false
      'notifications' => boolean false
  'geo' => null
  'coordinates' => null
  'place' => null
  'contributors' => null
  'retweet_count' => int 0
  'favorite_count' => int 0
  'entities' => 
    array (size=4)
      'hashtags' => 
        array (size=0)
          empty
      'symbols' => 
        array (size=0)
          empty
      'urls' => 
        array (size=0)
          empty
      'user_mentions' => 
        array (size=0)
          empty
  'favorited' => boolean false
  'retweeted' => boolean false
  'lang' => string 'en' (length=2)
```