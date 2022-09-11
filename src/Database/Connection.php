<?php

namespace PHP\Database;

use Exception;
use PDO;
use PDOException;

class Connection {

    public static function make( $config ) {
        try{
           return new PDO("{$config['database']['connection']};dbname={$config['database']['name']}", $config['database']['username'], $config['database']['password']);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
        
    }
}