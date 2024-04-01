<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function createmaster(Request $request)
    {
        dd($request->all());
    }
}
