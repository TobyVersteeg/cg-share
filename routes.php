<?php

$router->get('', 'App/Controllers/HomeController.php@index');
$router->get('home', 'App/Controllers/HomeController.php');
$router->get('login', 'App/Controllers/LoginController.php');
$router->get('users', 'App/Controllers/UserController.php');
$router->post('users/store', 'App/Controllers/UserController.php');
$router->get('profile', 'App/Controllers/ProfileController.php');
$router->post('names', 'App/Controllers/ProfileController.php');