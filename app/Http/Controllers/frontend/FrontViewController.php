<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontViewController extends Controller
{

    public function frontendsignup()
    {
        return view('Frontend.signup');
    }
    public function frontendgridlisting()
    {
        return view('Frontend.gridlisting');
    }
    public function singleproperty()
    {
        return view('Frontend.singleproperty');
    }

}
