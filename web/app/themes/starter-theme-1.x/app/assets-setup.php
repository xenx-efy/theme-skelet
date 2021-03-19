<?php

namespace App;

use Timber\Theme;

add_action( 'wp_enqueue_scripts', function () {
	$theme = new Theme();
	if ( is_single() ) {
		wp_enqueue_style( 'bts/style.css', asset_path( 'styles/style.css' ), false, filemtime( $theme->path() . '/dist/styles/style.css' ) );
		wp_enqueue_script( 'bts/script.js', asset_path( 'scripts/script.js' ), [ 'jquery' ], filemtime( $theme->path() . '/dist/scripts/script.js' ), true );
		wp_localize_script( 'bts/script.js', 'ajax', [
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		] );
	}
}, 100 );
