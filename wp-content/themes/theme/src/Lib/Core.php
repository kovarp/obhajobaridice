<?php

namespace Theme\Lib;

class Core {

	public function __construct() {
		add_action(
			'wp_enqueue_scripts',
			[
				$this,
				'loadStyles'
			]
		);

		add_action(
			'wp_enqueue_scripts',
			[
				$this,
				'loadScripts'
			]
		);

		add_action(
			'after_setup_theme',
			[
				$this,
				'themeSupport'
			]
		);

		$this->disableEmoji();
	}

	public function loadStyles() {
		if (!is_user_logged_in()) {
			wp_deregister_style('dashicons');
		}

		wp_enqueue_style(
			'theme-app',
			get_stylesheet_directory_uri() . '/assets/dist/css/app.css',
			[],
			filemtime(get_stylesheet_directory() . '/assets/dist/css/app.css')
		);
	}

	public function loadScripts() {
		// Remove wp-embed script
		wp_deregister_script('wp-embed');

		// Load new jQuery version
		wp_deregister_script('jquery');

		wp_enqueue_script(
			'theme-app',
			get_stylesheet_directory_uri() . '/assets/dist/js/app.js',
			[],
			filemtime(get_stylesheet_directory() . '/assets/dist/js/app.js'),
			TRUE
		);
	}

	public function themeSupport() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Let WordPress manage the document title.
		add_theme_support('title-tag');

		// Add HTML5 support
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

		// Adding Thumbnail basic support
		add_theme_support('post-thumbnails');

		// Adding support for Widget edit icons in customizer
		add_theme_support('customize-selective-refresh-widgets');
	}

	public function disableEmoji() {
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('wp_print_styles', 'print_emoji_styles');

		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('admin_print_styles', 'print_emoji_styles');
	}
}

new Core();
