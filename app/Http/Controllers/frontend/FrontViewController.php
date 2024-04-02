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
    public function frontendlistlisting()
    {
        return view('Frontend.listlisting');
    }
    public function frontsingleproperty()
    {
        return view('Frontend.singleproperty');
    }
    public function frontagentgrid()
    {
        return view('Frontend.agentgrid');
    }
    public function frontagentdetails()
    {
        return view('Frontend.agentdetails');
    }

}
