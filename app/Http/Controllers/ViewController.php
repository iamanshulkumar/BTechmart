<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewmaster()
    {
        return view('Admin.master');
    }
    public function vieuserlist()
    {
        return view('User.userlist');
    }
    public function vieuserlistings()
    {
        return view('User.userlistings');
    }
    public function viewagentlist()
    {
        return view('Agent.agentlist');
    }
    public function viewagentlistings()
    {
        return view('Agent.agentlistings');
    }
    public function viewvendorlist()
    {
        return view();
    }


    //WEBSITE VIEWS
    public function frontendhomepage()
    {
        return view('home');
    }
}
