<?php

namespace Radicloud\LogApis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogApisController extends Controller
{
    //

    public function LogMe(){


    }

    public function add($a, $b){
        $result =  $a + $b;

        return view('LogApis::add', compact('result'));
    }

    public function subtract($a, $b){
        echo $a - $b;
    }
}
