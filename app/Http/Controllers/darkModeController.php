<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class darkModeController extends Controller
{
    public static function getMode(){
        return session()->get('darkMode', '');
    }

    public static function switchMode(){
        $value =  session()->get('darkMode', '');
        if($value === ''){
            return 'dark';
        }
        return '';
    }
}
