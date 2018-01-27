<?php
/*
Plugin Name: Today's Date is
*/
function todaysdate_shortcodes_init()
{
    function todaysdate_shortcode($atts = [], $content = null)
    {
        
        date_default_timezone_set('US/Eastern');
        $content .= date('l jS \of F Y h:i:s A');
        return $content;
    }
    add_shortcode('todaysdate-plugin', 'todaysdate_shortcode');
}
add_action('init', 'todaysdate_shortcodes_init');