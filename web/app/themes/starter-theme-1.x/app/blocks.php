<?php

namespace App;
//
//use Timber\Theme;

use Timber\Theme;

function my_mario_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'bts-blocks',
				'title' => __( 'Custom BTS Blocks', 'bts-blocks' ),
			),
		)
	);
}

add_filter( 'block_categories', 'App\my_mario_block_category', 10, 2 );

function my_acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace( 'acf/', '', $block['name'] );
	echo $slug;
	echo file_exists( get_theme_file_path( "views/blocks/" . $slug . ".twig" ) );

	// include a template part from within the "template-parts/block" folder
	if ( file_exists( get_theme_file_path( "views/blocks/" . $slug . ".twig" ) ) ) {
		include( get_theme_file_path( "views/blocks/" . $slug . ".twig" ) );
	}
}

//function register_acf_block_types() {
//
//}
//
//// Check if function exists and hook into setup.
//if ( function_exists( 'acf_register_block_type' ) ) {
//	add_action( 'acf/init', 'register_acf_block_types' );
//}

function my_acf_load_post_type_field_choices( $field ) {
	$field['choices'] = get_post_types( [ 'public' => true ] );

	return $field;
}

add_filter( 'acf/load_field/name=post_type', 'my_acf_load_post_type_field_choices' );

/**
 * Create blocks based on templates found in Sage's "views/blocks" directory
 */
add_action( 'acf/init', function () {

	// Check whether ACF exists before continuing
	$dir = get_template_directory() . '/views/blocks';


	// Sanity check whether the directory we're iterating over exists first
	if ( ! file_exists( $dir ) ) {
		return;
	}

	// Iterate over the directories provided and look for templates
	$template_directory = new \DirectoryIterator( $dir );

	foreach ( $template_directory as $template ) {
		if ( function_exists( 'acf_register_block_type' ) && ! $template->isDot() && ! $template->isDir() ) {

			$block_name = filenameToString( $template->getFilename() );

			acf_register_block_type( array(
				'name'            => $block_name,
				'title'           => __( ucfirst( $block_name ) ),
				'description'     => __( 'A custom testimonial block.' ),
				'render_template' => get_theme_file_path(__FILE__) . '',
				'category'        => 'formatting',
				'icon'            => 'admin-comments',
				'keywords'        => array( 'testimonial', 'quote' ),
			) );
		}
	}
} );
