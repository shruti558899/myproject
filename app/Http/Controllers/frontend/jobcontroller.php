<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jobcontroller extends Controller
{
   public function job()
   {
        return view('job');
   }
}

