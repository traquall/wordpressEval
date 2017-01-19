<?php

/*
Plugin Name:custom css ahmed
Plugin url: https://google.tn
Description: 
version:0.1
Author: AHMRD KOUBAA
License: gpl2


*/
function addcss()
{
wp_register_style('ahmed_css', plugin_dir_url(__file__).'/styles-ahmed.css');
wp_enqueue_style('ahmed_css');
}

add_action('wp_enqueue_scripts','addcss');