<?php

namespace PHP\Database;

use Exception;
use PDO;
use PDOException;

class Connection {

    public static function make() {
        try{
           return new PDO("mysql:host=localhost;dbname=project", 'root', '01906759899');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
        
    }
}