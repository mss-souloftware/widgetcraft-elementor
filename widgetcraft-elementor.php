<?php

/**
 * Plugin Name: WidgetCraft Elementor
 * Description: Auto embed any embbedable content from external URLs into Elementor.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      M. Sufyan Shaikh
 * Author URI:  https://developers.elementor.com/
 * Text Domain: widgetcraft
 *
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/*
 * Register WidgetCraft Widget.
 */

function register_widgetcraft_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/team-classic.php' );

	$widgets_manager->register( new \Elementor_WidgetCraft_Widget() );

}
add_action( 'elementor/widgets/register', 'register_widgetcraft_widget' );