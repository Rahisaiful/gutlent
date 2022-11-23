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
		add_action( 'init', [ __CLASS__, 'onInit' ] );
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

	private static function registerBlock() {
		register_block_type( 'gutlent_blocks/reaction-reviews', [
			'render_callback' => [ __CLASS__, 'rcb_reaction_reviews' ],
			'editor_script' => 'mcqac-related-quiz-block-script',
	        'editor_style'  => 'mcqac-related-quiz-block-editor-style',
	        'script'        => 'mcqac-related-quiz-block-frontend-style',
	        'style'         => 'mcqac-related-quiz-block-frontend-style',
		]):
	}

	private static function rcb_reaction_reviews() {
		
	}

}

Gutlent::getInstance();