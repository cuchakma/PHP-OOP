<?php 

namespace PHP;

use Exception;

class Container {

    public static $registry = [];

    public static function bind( $key, $value ) {
        self::$registry[$key] = $value;
    }

    public static function get( $key ) {
        if( ! array_key_exists( $key, self::$registry ) ) {
            throw new Exception("A {$key} does not exist!");
        }

        return self::$registry[$key];
    }

}