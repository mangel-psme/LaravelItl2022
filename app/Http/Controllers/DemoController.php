<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function holaMundo()
    {
        echo 'Hola mundo desde controlador';
    }

    public function vista1()
    {
        return view('vista1');
    }
}
