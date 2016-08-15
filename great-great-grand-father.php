<?php

class Great_Great_Grand_Father {
	const FIRST_NAME  = 'Howard';
	const LAST_NAME   = 'Johnson';
	const DEFAULT_TZ  = 'America/Los_Angeles';
	const STATUS       = 'Deceased';
	const HAIR_COLOUR = 'Dark Brown';
	const EYE_COLOUR  = 'Dark Brown';
	const ALLERGIES   = 'Chocolate';
	const FILE        = __FILE__;

	public static $instance;

	public static $class_name;

	public function print_stats() {
		print( 'Class name: ' . get_class( self::$instance ) . PHP_EOL );
		print( 'Name: ' . self::FIRST_NAME . ' ' . self::LAST_NAME  . PHP_EOL );
		print( 'Hair colour: ' . self::HAIR_COLOUR  . PHP_EOL );
		print( 'Eye colour: ' . self::EYE_COLOUR  . PHP_EOL );

		print( 'Status: ' . self::STATUS  . PHP_EOL );

		$this->print_allergies();

	}

	public function print_allergies() {
		print( 'Known allergies: ' . self::ALLERGIES  . PHP_EOL );
	}

	public static function get_instance() {
		self::set_tz();

		if ( self::$instance === null ) {
			self::$instance = new static();
		}

		return( self::$instance );
	}

	public static function set_tz() {
		date_default_timezone_set( static::DEFAULT_TZ );
	}

}
