<?php

$router->get('', 'controllers/HomeController.php');
$router->get('login', 'controllers/LoginController.php');
$router->get('profile', 'controllers/ProfileController.php');
$router->post('names', 'controllers/ProfileController.php');