<?php

namespace App\Controllers;

class UserController extends Controller
{

    protected $request;

    static function request()
    {
        self::$request = parent::getRequest();
    }

}

