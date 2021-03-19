<?php

namespace App;

add_action('init', 'App\register_post_types');
function register_post_types()
{
	$post_types = array(
		array(
			"post_type_name" => "news",
			"name" => "News",
			"name_plural" => "News",
			"name_lowercase" => "new",
			"name_lowercase_plural" => "news",
			'menu_icon' => 'dashicons-text-page',
			"supports" => array('title', 'editor', 'thumbnail', 'author', 'excerpt', 'revisions'),
			"has_archive" => false
		)
	);

	foreach ($post_types as $post_type) {
		$post_type_args = array(
			'labels' => array(
				'name' => __($post_type["name_plural"]),
				'singular_name' => __($post_type["name"]),
				'add_new' => __('Add New ' . $post_type["name"]),
				'add_new_item' => __('Add New ' . $post_type["name"]),
				'edit_item' => __('Edit ' . $post_type["name"]),
				'new_item' => __('New ' . $post_type["name"]),
				'view_item' => __('View ' . $post_type["name"]),
				'view_items' => __('View ' . $post_type["name_plural"]),
				'search_items' => __('Search ' . $post_type["name_plural"]),
				'not_found' => __('No ' . $post_type["name_lowercase_plural"] . ' found'),
				'not_found_in_trash' => __('No ' . $post_type["name_lowercase_plural"] . ' found in Trash'),
				'all_items' => __('All ' . $post_type["name_plural"]),
				'archives' => __($post_type["name"] . ' Archives'),
				'attributes' => __($post_type["name"] . ' Attributes'),
				'insert_into_item' => __('Insert into ' . $post_type["name_lowercase"]),
				'uploaded_to_this_item' => __('Uploaded to this ' . $post_type["name_lowercase"]),
				'item_published ' => __($post_type["name"] . ' published.'),
				'item_published_privately' => __($post_type["name"] . ' published privately.'),
				'item_reverted_to_draft' => __($post_type["name"] . ' reverted to draft.'),
				'item_scheduled' => __($post_type["name"] . ' scheduled.'),
				'item_updated' => __($post_type["name"] . ' updated.'),
			),
			'menu_icon' => $post_type['menu_icon'],
			'public' => true,
			'has_archive' => $post_type["has_archive"],
			'menu_position' => 5,
			'show_in_rest' => true,
			'supports' => $post_type["supports"],
		);

		register_post_type($post_type["post_type_name"], $post_type_args);
	}
}