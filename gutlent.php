<?php
/*
Plugin Name:  Gutlent
Plugin URI:   http://wpmobo.com/plugins/gutlent
Description:  
Version:      1.0.0
Author:       wpmobo
Author URI:   http://wpmobo.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  gutlent
Domain Path:  /languages
*/


final class Gutlent {

	private static $instance;

	function __construct() {
		add_action( 'init', [ __CLASS__, 'registerBlock' ] );
	}

	public static function getInstance() {

		if( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;

	}

	public static function onInit() {
		self::registerBlock();
	}

	public static function registerBlock() {

		wp_enqueue_script('reactionReviewScript', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'));
	    wp_enqueue_style('reactionReviewStyle', plugin_dir_url(__FILE__) . 'build/index.css');

		register_block_type( 'gutlent-blocks/gutlent-reaction-review', [
			'render_callback' => [ __CLASS__, 'rcb_reaction_reviews' ],
			'editor_script' => 'reactionReviewScript',
	        'editor_style'  => 'reactionReviewStyle'		
	    ]);
	}

	public static function rcb_reaction_reviews() {
		ob_start();
		echo '<p>Say hello</p>';
		return ob_get_clean();
	}

}

Gutlent::getInstance();