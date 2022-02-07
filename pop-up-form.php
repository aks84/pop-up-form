<?php
/**
 * Plugin Name:     Pop Up Form
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     pop-up-form
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Pop_Up_Form
 */

// enqueue assets

function tubemint_popup_form_accets(){
        wp_enqueue_style( 'tubemint_popup_form_style', plugins_url('/css/tubemint-form-style.css', __FILE__), false);
        wp_register_script('tubemint-popup-form-script', plugins_url('/js/tubemint-form-script.js',__FILE__), array( 'jquery'));
        wp_enqueue_script('tubemint-popup-form-script');
    }
add_action('wp_enqueue_scripts', "tubemint_popup_form_accets");



// pop-up form markup
function tubemint_popup_form(){
  
    echo '
    <div class="tubemint-popup-form">
    <div class="btn_wrapper">
        <button id="x-form">X</button>
    </div>
    <div class="tubemint-form-banner">
        <img src="https://via.placeholder.com/400x100" />
    </div>
    <div class="tubemint-form-header">
    <h2>Newsletter Sign-up Form</h2>
    </div>
        <form action="#" method="POST" class="form-tubemint" >
            <label>Email*</label>
            <input type="email" name="tubemint-form-email">
            <input type="submit" name="form-submit-btn">
        </form>
    </div>';

}

add_action('wp_footer', 'tubemint_popup_form');

