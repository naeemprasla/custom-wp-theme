<?php

/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


if (!function_exists('custom_theme_setup_mode')) {
	/**
	 * Set up theme support.
	 *
	 * @return void
	 */
	function custom_theme_setup_mode()
	{
		$hook_result = apply_filters_deprecated('elementor_hello_theme_load_textdomain', [true], '2.0', 'hello_elementor_load_textdomain');
		if (apply_filters('hello_elementor_load_textdomain', $hook_result)) {
			load_theme_textdomain('hello-elementor', get_template_directory() . '/languages');
		}

		$hook_result = apply_filters_deprecated('elementor_hello_theme_register_menus', [true], '2.0', 'hello_elementor_register_menus');
		if (apply_filters('hello_elementor_register_menus', $hook_result)) {

			//Main Nav
			register_nav_menus(array('menu-1' => __('Main Navigation', 'hello-elementor')));
		}

		$hook_result = apply_filters_deprecated('elementor_hello_theme_add_theme_support', [true], '2.0', 'hello_elementor_add_theme_support');
		if (apply_filters('hello_elementor_add_theme_support', $hook_result)) {
			add_theme_support('post-thumbnails');
			add_theme_support('automatic-feed-links');
			add_theme_support('title-tag');
			add_theme_support(
				'html5',
				array(
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
				)
			);
			/**
			 * Logo
			 */
			add_theme_support('custom-logo');

			/*
			 * Editor Style.
			 */
			add_editor_style('editor-style.css');

			/*
			 * Gutenberg wide images.
			 */
			add_theme_support('align-wide');

			/*
			 * WooCommerce.
			 */
			$hook_result = apply_filters_deprecated('elementor_hello_theme_add_woocommerce_support', [true], '2.0', 'hello_elementor_add_woocommerce_support');
			if (apply_filters('hello_elementor_add_woocommerce_support', $hook_result)) {
				// WooCommerce in general.
				add_theme_support('woocommerce');
				// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
				// zoom.
				add_theme_support('wc-product-gallery-zoom');
				// lightbox.
				add_theme_support('wc-product-gallery-lightbox');
				// swipe.
				add_theme_support('wc-product-gallery-slider');
			}
		}
	}
}
add_action('after_setup_theme', 'custom_theme_setup_mode');





// Disable Core Updated
function remove_core_updates()
{
	global $wp_version;
	return (object) array('last_checked' => time(), 'version_checked' => $wp_version,);
}
add_filter('pre_site_transient_update_core', 'remove_core_updates');
add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
add_filter('pre_site_transient_update_themes', 'remove_core_updates');


// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false', 100);
add_filter('use_block_editor_for_post', '__return_false', 10);
// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter('use_widgets_block_editor', '__return_false');


/** Tracking Codes  */
require get_template_directory() . '/modals/tracking.php';

/* Theme Functions  */
require get_template_directory() . '/modals/functions.php';

/* Enaable Bootstrap On Navbar  */
require get_template_directory() . '/modals/wp_bootstrap_navwalker.php';
