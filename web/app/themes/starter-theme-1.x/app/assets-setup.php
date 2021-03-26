<?php

namespace App;

use Timber\Theme;

add_action( 'wp_enqueue_scripts', function () {
	$theme = new Theme();
		wp_enqueue_style( 'timbercss', asset_path( 'styles/style.css' ), false,  1.0);
		wp_enqueue_script( 'timberjs', asset_path( 'scripts/script.js' ), [ 'jquery' ], 1.0, true );
		wp_localize_script( 'timberajax', 'ajax', [
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		] );
}, 100 );
