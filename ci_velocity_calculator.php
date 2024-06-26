<?php
/*
Plugin Name: CI Velocity calculator
Plugin URI: https://www.calculator.io/velocity-calculator/
Description: Free online velocity calculator solves for v, u, a or t using velocity formula. Calculate the final velocity (v) using the equation v = u + at.
Version: 1.0.0
Author: Velocity Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_velocity_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Velocity Calculator by www.calculator.io";

function display_calcio_ci_velocity_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Velocity Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_velocity_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_velocity_calculator', 'display_calcio_ci_velocity_calculator' );