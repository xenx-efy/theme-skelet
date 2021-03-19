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
