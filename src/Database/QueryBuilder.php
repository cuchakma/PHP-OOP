<?php

namespace PHP\Database;

use PDO;

class QueryBuilder{

    public $pdo;

    public function __construct( PDO $pdo )
    {
        $this->pdo = $pdo;    
    }

    public function selectAll( $tablename ) {
        $statement = $this->pdo->prepare("Select * from {$tablename}");
        $statement->execute();
        return $statement->fetchAll( PDO::FETCH_OBJ );
    }
}   