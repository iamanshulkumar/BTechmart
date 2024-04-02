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
    public function frontdashboard()
    {
        return view('Frontend.dashboard.frontdashboard');
    }
    public function frontuserprofile()
    {
        return view('Frontend.dashboard.frontuserprofile');
    }
    public function frontbookmarks()
    {
        return view('Frontend.dashboard.frontbookmarks');
    }
    public function frontmyproperty()
    {
        return view('Frontend.dashboard.frontmyproperty');
    }
    public function frontsubmitproperty()
    {
        return view('Frontend.dashboard.frontsubmitproperty');
    }
    public function frontmessages()
    {
        return view('Frontend.dashboard.frontmessages');
    }
    public function frontchoosepackage()
    {
        return view('Frontend.dashboard.frontchoosepackage');
    }
    public function frontchangepassword()
    {
        return view('Frontend.dashboard.frontchangepassword');
    }
    public function addproperty()
    {
        return view('Frontend.addproperty');
    }

}
