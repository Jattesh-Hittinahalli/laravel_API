<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dbuser;

class users extends Controller
{
    //
    function list()
    {
        
        return dbuser::all();

    }
}
