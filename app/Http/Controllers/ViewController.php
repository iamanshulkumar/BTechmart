<?php
#{{---------------------------------------------------🔱HAR HAR MAHADEV🔱-----------------------------------------------------------------}}
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
    public function viewpropertydetails()
    {
        return view('Agent.agentpropertydetails');
    }
    public function viewenquirylist()
    {
        return view('Admin.enquirylist');
    }
    public function viewaddemployee()
    {
        return view('Employee.employeelist');
    }
    public function employeesetup()
    {
        return view('Employee.employeesetup');
    }
    public function adminprofile()
    {
        return view('Admin.adminprofile');
    }
}
