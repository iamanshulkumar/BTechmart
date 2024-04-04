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
    public function frontagentlist()
    {
        return view('Frontend.agentlist');
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

    public function blogs()
    {
        return view('Frontend.Pages.blogs');
    }
    public function blogdetail()
    {
        return view('Frontend.Pages.blogdetail');
    }

    public function checkout()
    {
        return view('Frontend.checkout');
    }
    public function contactus()
    {
        return view('Frontend.Pages.contactus');
    }

    // static functions
    public function aboutus()
    {
        return view('Frontend.Pages.aboutus');
    }
    public function error404()
    {
        return view('Frontend.Pages.error404');
    }
    public function privacypolicy()
    {
        return view('Frontend.Pages.privacypolicy');
    }
    public function pricingpage()
    {
        return view('Frontend.Pages.pricingpage');
    }
    public function faqs()
    {
        return view('Frontend.Pages.faqs');
    }
    
    

}
