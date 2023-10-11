<?php

namespace App\Http\Controllers;

use App\Models\Twit;
//use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    //
    public function index():View
    {


//        dump(Twit::all());
        // passing data to our view
        return view("dashboard",[
            'twits'=>Twit::orderBy('created_at','DESC')->get()
        ]);
    }
}
