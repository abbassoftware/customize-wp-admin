<?php
/*
 * Plugin Name: Customize wp-admin
 * Description: This plugin shows you how to customize your WordPress Admin section.
 * Author: Abbas Suterwala.
 * Version: 1.0
 */
function change_login_logo() {
    ?>
    <style type="text/css">
        .login h1 a {
        	background-image: url(<?php echo plugins_url ( 'images/mylogo.png', __FILE__ );
            ?>);
    }
    </style>
<?php
}
add_action ( 'login_enqueue_scripts', 'change_login_logo' );

function remove_admin_widgets() {
    remove_meta_box ( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box ( 'dashboard_primary', 'dashboard', 'side' );
}
add_action ( 'wp_dashboard_setup', 'remove_admin_widgets' );


function add_custom_admin_widgets() {
    wp_add_dashboard_widget( 'my_dashboard_custom_widget', 'Custom Widget', 'custom_widget_details' );
}

function custom_widget_details() {
 echo 'This is a custom widget.<br>';
 echo 'I can add any php or HTML code here to provide any functionality you like.';
}
add_action( 'wp_dashboard_setup', 'add_custom_admin_widgets' );