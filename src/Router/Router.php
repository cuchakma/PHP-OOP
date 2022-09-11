<?php

namespace PHP\Router;

use Exception;

class Router {

    protected static $routes;

    public static function load( $file ) {
        $router = new self;

        self::$routes = require './'.$file;

        return $router;
    }

    public function direct( $url ) {
        if( array_key_exists( $url, self::$routes ) ) {
            return self::$routes[$url];
        }
        throw new Exception('No Routes Defined');
    }
}