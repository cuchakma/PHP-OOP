<?php

use PHP\Router\Router;

$data = require './bootstrap.php';


$router = Router::load('routes.php');

$request_data = isset( $_SERVER['REQUEST_URI'] ) ? trim($_SERVER['REQUEST_URI'], '/') : '';

require './'.$router->direct($request_data);


