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

//        new database entry
        $twit=new Twit([
            'content'=>'Hello there',
            'likes'=> 20
        ]);
//        $twit->content='test';
//        $twit->likes=0;
        $twit->save();


//        dump(Twit::all());
        // passing data to our view
        return view("dashboard",[
            'twits'=>Twit::orderBy('created_at','DESC')->get()
        ]);
    }
}
