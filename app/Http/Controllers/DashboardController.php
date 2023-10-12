<?php

namespace App\Http\Controllers;

use App\Models\Twit;
//use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    //
    public function index(): View
    {

        // passing data to our view and displaying on page
        return view("dashboard", [
            'twits' => Twit::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
