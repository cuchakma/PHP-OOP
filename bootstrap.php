<?php
require './vendor/autoload.php';

use PHP\Container as Container;
use PHP\Task as Task;
use PHP\Database\Connection as Connection;
use PHP\Database\QueryBuilder as QueryBuilder;
use PHP\Router\Router as Router;

$config = require './config.php';

$data = new QueryBuilder( Connection::make( $config ) );

return $data->selectAll('task');