<?php

require './vendor/autoload.php';


use PHP\Container as Container;
use PHP\Task as Task;
use PHP\Database\Connection as Connection;
use PHP\Database\QueryBuilder as QueryBuilder;

$build_query = new QueryBuilder( Connection::make() );
$data = $build_query->selectAll('task');

require './views/task-view.php';


