<?php
//generiert neue SessionId die in einem Cookie gespeichert wird.
session_start();

require __DIR__."/../init.php";

$pathInfo = $_SERVER['PATH_INFO'];

$routes = [
    '/login' => [
        'controller' => 'loginController',
        'method' => 'login'
    ],
    '/dashboard' => [
        'controller' => 'loginController',
        'method' => 'dashboard'
    ],
    '/logout' => [
        'controller' => 'loginController',
        'method' => 'logout'
    ],
    '/index' => [
        'controller' => 'postsController',
        'method' => 'index'
    ],
    '/post' => [
        'controller' => 'postsController',
        'method' => 'show'
    ]
];

if(isset($routes[$pathInfo])){
    $route = $routes[$pathInfo];
    $controller = $container->make($route['controller']);
    $method = $route['method'];
    $controller->$method();
}

/*  use the obove code to add new route in array.
if($pathInfo == "/index"){
    $postsController = $container->make("postsController");
    $postsController->index();
} elseif($pathInfo == "/post"){
    $postsController = $container->make("postsController");
    $postsController->show();
}
*/
?>