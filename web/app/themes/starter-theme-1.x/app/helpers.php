<?php

namespace App;

use Timber\Site;

/**
 * Return asset path
 *
 * @param string|null $path
 *
 * @return string
 */
function asset_path( string $path = null ): string {
    $base_path = trailingslashit(get_stylesheet_directory_uri() . '/dist');

	return $base_path . $path;
}

function filename_to_string( string $filename ) {
	return trim( preg_replace( '/\.twig|[^A-z0-9]|_/', ' ', $filename ) );
}

function remove_file_extension( $filename ) {
	return preg_replace( '/\.[^.]+$/', '', $filename );
}
