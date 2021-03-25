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
	if ( $path ) {
		$base_path = $path;
	} else {
		$site      = new Site();
		$base_path = $site->link();
	}

	return $base_path . $path;
}

function filename_to_string( string $filename ) {
	return trim( preg_replace( '/\.twig|[^A-z0-9]|_/', ' ', $filename ) );
}

function remove_file_extension( $filename ) {
	return preg_replace( '/\.[^.]+$/', '', $filename );
}
