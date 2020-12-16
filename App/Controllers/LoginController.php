<?php

namespace App\Controllers;

use App\Libraries\View;

class LoginController extends Controller
{
    
    public function __construct($function)
    {
        if (!empty($function)) {
            if (method_exists(get_class(), $function))
            {
                $this->$function();
            }
        }
    }

    public function index()
    {
        $var1 = [
            'apple', 'banana', 'pear', 'cherries', 'orange'
        ];

        $var2 = [
            'car', 'bike', 'boat', 'aeroplain', 'bus'
        ];

        View::render('login.view', [
            'fruit' => $var1, 
            'transport' => $var2]
        );
    }

}