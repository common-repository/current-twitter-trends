<?php
/*
Plugin Name: Current Twitter Trends
Plugin URI: http://advertisablearena.com
Description: Show current twitter trends to the site visitors
Version: 1.0
Author: abhijit Gaikwad
Author URI: http://advertisablearena.com
*/

function sampleTwitterTrends() 
{
  echo '<iframe src ="http://advertisablearena.com/twitter/currentTrends/read_current_twitter_trends.html" width="180" height="300" frameBorder="0"> <p>Your browser does not support iframes.</p></iframe>';

}

function widget_myTwitterTrends($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Current Twitter Trends<?php echo $after_title;
  sampleTwitterTrends();
  echo $after_widget;
}

function myTwitterTrends_init()
{
  register_sidebar_widget(__('Current Twitter Trends'), 'widget_myTwitterTrends');     
}
add_action("plugins_loaded", "myTwitterTrends_init");


 
?>