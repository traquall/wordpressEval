<?php

/*
Plugin Name:custom css ahmed
Plugin url: https://google.tn
Description: 
version:0.1
Author: AHMRD KOUBAA
License: gpl2


*/
function addjs()
{
wp_register_script('ahmed_script', plugin_dir_url(__file__).'/ahmed.js');
wp_enqueue_script('ahmed_script');
}

add_action('wp_enqueue_scripts','addjs');