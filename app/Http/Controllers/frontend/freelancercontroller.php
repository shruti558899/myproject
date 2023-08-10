<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class freelancercontroller extends Controller
{
    public function freelancer()
    {
        return view('freelancer');
    }
}

