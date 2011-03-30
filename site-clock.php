<?php
/*
Plugin Name: Flash Clock
Plugin URI: http://www.moshnett.com/986/flash-widget-clock-wordpress-plugin
Description: A Wordpress plugin to display a flash analog clock with date on your blog in the widget sidebar.
Author: Gokul G
Version: 1.0
Author URI: http://www.moshnett.com
*/

function mshSiteClock()
{
	$clockUrl = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).'msh_clock.swf';
	echo "<object width=\"160\" height=\"184\">
<param name=\"movie\" value=\"$clockUrl\">
<embed src=\"$clockUrl\" width=\"160\" height=\"184\">
</embed>
</object>";
}
function widget_mshSiteClock($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Current Time<?php echo $after_title;
  mshSiteClock();
  echo $after_widget;
}
 
function mshSiteClock_init()
{
  register_sidebar_widget(__('Clock Widget'), 'widget_mshSiteClock');
}
add_action("plugins_loaded", "mshSiteClock_init");
?>