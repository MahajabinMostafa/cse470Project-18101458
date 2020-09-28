<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class books extends Controller
{
    public function bookName(){


        return response(['created'=>true],200);
    }
}
