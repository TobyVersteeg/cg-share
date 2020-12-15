<?php

namespace App\Controllers;

class HomeController {

    public function __construct()
    {
        echo "__construct";
    }

    public function index()
    {
        require 'views/home.view.php';
    }
}