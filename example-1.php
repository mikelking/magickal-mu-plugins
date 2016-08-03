<?php

class Great_Great_Grand_Father {
    const FIRST_NAME = 'Howard';
    const LAST_NAME  = 'Johnson';
    const DEFAULT_TZ = 'America/Los_Angeles';
    const STATUS     = 'Deceased';
    const ALLERGIES  = 'Chocolate';

    public static $instance;
    public static $instatiator;

    public static $class_name;

    public function print_stats() {
        print( 'Name: ' . static::FIRST_NAME . ' ' . static::LAST_NAME  . PHP_EOL );
        print( 'Status: ' . static::STATUS  . PHP_EOL );
        print( 'Class name: ' . get_class( static::$instance ) . PHP_EOL );

    }

    public function print_allergies() {
        print( 'Known allergies: ' . static::ALLERGIES  . PHP_EOL );
    }

    public static function get_instance( $instatiator = null) {
//        self::$instance = null;
//        self::set_instantiator( $instatiator );
        self::set_tz();

        if ( static::$instance === null ) {
            static::$instance = new static();
        }

        return( static::$instance );
    }

    public static function set_instantiator( $instatiator = null ) {
        if ( isset( $instatiator ) ) {
            self::$instatiator = $instatiator;
        }
    }

    public static function set_tz() {
        date_default_timezone_set( static::DEFAULT_TZ );
    }

}

class Great_Grand_Mother extends Great_Great_Grand_Father {
    const FIRST_NAME = 'Mary';
    const LAST_NAME  = 'Luurtsema';
    const DEFAULT_TZ = 'America/New_York';
    const STATUS     = 'ALIVE';
    const ALLERGIES  = 'None';

}

class Grand_Father extends Great_Grand_Mother {
    const FIRST_NAME = 'James';
    const LAST_NAME  = 'King';
    const DEFAULT_TZ = 'America/New_York';
    const STATUS     = 'ALIVE';
    const ALLERGIES  = 'Chocolate';


}

class Father extends Grand_Father {
    const FIRST_NAME = 'Mikel';
    const LAST_NAME  = 'King';
    const DEFAULT_TZ = 'America/New_York';
    const STATUS     = 'ALIVE';


}

class Son Extends Father {
    const FIRST_NAME = 'Jarett';
    const LAST_NAME  = 'King';
    const DEFAULT_TZ = 'America/New_York';
    const STATUS     = 'ALIVE';
}

$mikel = Father::get_instance();
$mikel->print_stats();
$mikel->print_allergies();
