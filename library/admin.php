<?php
/* 
This file handles the admin area and functions.
You can use this file to make changes to the
dashboard. Updates to this page are coming soon.
It's turned off by default, but you can call it
via the functions file.

Developed by: Eddie Machado
URL: http://themble.com/bones/

Special Thanks for code & inspiration to:
@jackmcconnell - http://www.voltronik.co.uk/
Digging into WP - http://digwp.com/2010/10/customize-wordpress-dashboard/

*/

/************* CUSTOM LOGIN PAGE *****************/

// calling your own login css so you can style it 
function pfk_login_css() {
	/* i couldn't get wp_enqueue_style to work :( */
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/library/css/login.css">';
}

// changing the logo link from wordpress.org to your site 
function pfk_login_url() { echo bloginfo('url'); }

// changing the alt text on the logo to show your site name 
function pfk_login_title() { echo get_option('blogname'); }

// calling it only on the login page
add_action('login_head', 'pfk_login_css');
add_filter('login_headerurl', 'pfk_login_url');
add_filter('login_headertitle', 'pfk_login_title');

?>