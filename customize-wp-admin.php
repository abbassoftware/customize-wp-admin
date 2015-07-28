<?php
/*
 Plugin Name: Customize wp-admin
 Description: This plugin shows you how to customize your WordPress Admin section.
 Author: Abbas Suterwala.
 Version: 1.0
 */

function change_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo plugins_url( 'images/mylogo.png', __FILE__ ); ?>);
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'change_login_logo' );