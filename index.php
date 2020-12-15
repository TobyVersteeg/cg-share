<?php

use App\Libraries\Router;
use App\Libraries\Request;

require 'vendor/autoload.php';

require 'Core/bootstrap.php';

require 'views/layouts/head.view.php';

require Router::load('routes.php')->direct(Request::uri(), Request::method());

require 'views/layouts/footer.view.php';
