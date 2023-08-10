<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Summary of aboutcontroller
 */
class aboutcontroller extends Controller
{
    public function about()
    {
        return view('about');
    }
}

