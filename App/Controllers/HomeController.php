<?php

namespace App\Controllers;

dd($_SERVER);

class HomeController {

    public function index()
    {
        require 'views/home.view.php';
    }
}