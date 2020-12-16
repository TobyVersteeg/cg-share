<?php

use App\Libraries\Router;
use App\Libraries\Request;

require 'vendor/autoload.php';
require 'Core/bootstrap.php';

// Get URI, class and function
$route = Router::load('routes.php')->direct(Request::uri(), Request::method());

// Load the HTML header
require 'views/layouts/head.view.php';

// Inject code from controller
require $route['uri'];
new $route['class']($route['function']);

// Close it with the bottom end </body> and </html> tags
require 'views/layouts/bottom.view.php';
