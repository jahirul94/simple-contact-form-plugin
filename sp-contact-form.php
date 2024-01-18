<?php
/*
 * Plugin Name:       SP Contact Form 
 * Plugin URI:        https://wordpress.com/plugins/sp-contact-form/
 * Description:       This is a simple contact form plugin by shaped plugin llc.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Shaped Plugin LLC
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       scf
 */


// Enqueue scripts and styles
function sp_contact_form_scripts() {
    wp_enqueue_script('sp-contact-form-script', plugin_dir_url(__FILE__) . 'index.js', array('jquery'), '1.0', 'true');
}
add_action('wp_enqueue_scripts', 'sp_contact_form_scripts');

// add css 

function sp_contact_form_css_add(){
    wp_enqueue_style('sp_contact_form_css', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action('wp_enqueue_scripts' , 'sp_contact_form_css_add');


// Shortcode to display the contact form
function sp_contact_form_shortcode() {
    ob_start();
    include(plugin_dir_path(__FILE__) . 'form-template.php');
    return ob_get_clean();
}
add_shortcode('custom_contact_form', 'sp_contact_form_shortcode');
