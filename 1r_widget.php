<?php
/*
Plugin Name: 1r.hu Widget
Plugin URI: http://1r.hu
Description: Gyors rövidítési lehetőség wordpress blogodon belül.
Author: Webdew
Version: 0.1
Author URI: http://webdew.hu
*/
?>
<?php
/*  Copyright 2010  Webdew.hu  (email : kontakt@webdew.hu)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php

add_action('wp_print_scripts', 'wd1rhu_Action');
function wd1rhu_Action()
{
 $wp_1rhu_plugin_url = trailingslashit( WP_PLUGIN_URL ) ;
if (!is_admin())
	{
	 wp_enqueue_script('1rhu', $wp_1rhu_plugin_url.'1rhu/1r_hu_func.js');
	 wp_enqueue_script('1rhushorten', $wp_1rhu_plugin_url.'1rhu/1r_shorten.js');
	}
}

?>
<?php

function widget_1rhuwidget($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>
            <?php echo $before_title
                . '1r.hu Rövidítő'
                . $after_title; ?>

<? echo '<form action=""><input name="longurl" onKeyPress="return hitenter(this, event);"><br><input type="hidden" value="Submit" /></form>'; ?>
<?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('1r.hu Rövidítő','widget_1rhuwidget');
?>
