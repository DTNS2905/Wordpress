<?php
/**
 * This file adds functions to the GroundWP WordPress theme.
 *
 * @package GroundWP
 * @author  DotCamp
 * @license GNU General Public License v2 or later
 * @link    https://groundwp.com/
 */




if ( ! function_exists( 'groundwp_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function groundwp_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'groundwp', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css'
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'groundwp_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'groundwp_enqueue_style_sheet' );
function groundwp_enqueue_style_sheet() {

	wp_enqueue_style( 'groundwp', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function groundwp_register_block_styles() {

	$block_styles = array(
		'core/group'           => array(
			'full-height'     => __( 'Full-height', 'groundwp' ),
		),
		'core/image'           => array(
			'shadow' => __( 'Shadow', 'groundwp' ),
		),
		'core/list'           => array(
			'no-disc' => __( 'No Disc', 'groundwp' ),
		),
		'core/navigation-link' => array(
			'outline'      => __( 'Outline', 'groundwp' )
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'groundwp_register_block_styles' );

/**
 * Registers block categories, and type.
 *
 * @since 0.9.2
 */
function groundwp_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'groundwp', array( 'label' => __( 'GroundWP', 'groundwp' ) ) );
	}

	$block_pattern_categories = array(
		'groundwp-general' => array(
			'label'         => __( 'General', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
		'groundwp-section'   => array(
			'label'         => __( 'Section', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
		'groundwp-cta'   => array(
			'label'         => __( 'Call To Action', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
		'groundwp-pricing'   => array(
			'label'         => __( 'Pricing', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
		'groundwp-query'   => array(
			'label'         => __( 'Query', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
		'groundwp-header'  => array(
			'label'         => __( 'Header', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
		'groundwp-footer'  => array(
			'label'         => __( 'Footer', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'groundwp_register_block_pattern_categories', 9 );

require_once get_template_directory() . '/includes/admin-notice.php';
require_once get_template_directory() . '/includes/dom.php';
require_once get_template_directory() . '/includes/featured-image-placeholder.php';