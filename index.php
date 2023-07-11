

<?php

require 'router.php';

$router = new Router();

//first we can redirect the user to the form page 
$router->get('/', 'form');

//if the user filled the form then we create a databse
$router->post('/createDb', 'createDb');

$router->post('/DbPage', 'DbPage');

$router->post('/tablePage', 'tablePage');

$router->post('/insert', 'insert');

$router->get('/getAllDB,', 'getAllDB');

$router->post('/createTable', 'createTable');

$router->post('/createColumn', 'createColumn');

$router->post("/insertValues", "insertValues");




$router->routes($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
