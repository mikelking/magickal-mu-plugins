<?php

class Great_Great_Grand_Father {
	const FIRST_NAME  = 'Howard';
	const LAST_NAME   = 'Johnson';
	const DEFAULT_TZ  = 'America/Los_Angeles';
	const STATUS      = 'Deceased';
	const HAIR_COLOUR = 'Dark Brown';
	const EYE_COLOUR  = 'Dark Brown';
	const ALLERGIES   = 'Chocolate';
	const FILE        = __FILE__;

	public static $instance;

	public static $class_name;

	public function print_stats() {
		print( 'Class name: ' . get_class( static::$instance ) . PHP_EOL );
		print( 'Name: ' . static::FIRST_NAME . ' ' . static::LAST_NAME  . PHP_EOL );
		print( 'Hair colour: ' . static::HAIR_COLOUR  . PHP_EOL );
		print( 'Eye colour: ' . static::EYE_COLOUR  . PHP_EOL );

		print( 'Status: ' . static::STATUS  . PHP_EOL );

		print( 'File: ' . static::FILE  . PHP_EOL );

		$this->print_allergies();

	}

	public function print_allergies() {
		print( 'Known allergies: ' . static::ALLERGIES  . PHP_EOL );
	}

	public static function get_instance() {
		$new_instance = new static();
		self::set_tz();

		if ( self::$instance === null || ( self::$instance != $new_instance ) ) {
			self::$instance = $new_instance;
		}

		return( self::$instance );
	}

	public static function set_tz() {
		date_default_timezone_set( static::DEFAULT_TZ );
	}

}




