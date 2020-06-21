<?php
/**
 * Plugin Name:       Simple Custom Login
 * Plugin URI:        https://github.com/tajidyakub/custom-login-wp
 * Description:       A Simple WordPress Custom Login plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Tajid Yakub
 * Author URI:        https://github.com/tajidyakub
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       simple-custom-login
 * Domain Path:       /languages
 */

function scl_activate()
{
    //
}

function scl_deactivate()
{
    //
}

register_activation_hook( __FILE__, 'scl_activate' );
register_deactivation_hook( __FILE__, 'scl_deactivate' );

function scl_login_logo()
{
    ?>
    <style>
        #login h1 a, .login h1 a {
            background-image: url(<?php echo plugin_dir_url(__FILE__); ?>images/logo-login.png);
            background-size: 84px;
            background-position: center top;
            background-repeat: no-repeat;
            color: #444;
            height: 84px;
            font-size: 20px;
            font-weight: 400;
            line-height: 1.3;
            margin: 0 auto 25px;
            padding: 0;
            text-decoration: none;
            width: 84px;
            text-indent: -9999px;
            outline: 0;
            overflow: hidden;
            display: block;
        }
    </style>
    <?php
}

function scl_login_logo_url_title() {
    return 'Your Web Title';
}
function scl_login_logo_url() {
    return home_url();
}

add_action( 'login_enqueue_scripts', 'scl_login_logo' );
add_filter( 'login_headertitle', 'scl_login_logo_url_title' );
add_filter( 'login_headerurl', 'scl_login_logo_url' );

