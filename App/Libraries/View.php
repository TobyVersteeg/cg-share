<?php

namespace App\Libraries;

class View
{

    public static function render($view, array $vars = null)
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/views/' . $view . '.php';
    }

}