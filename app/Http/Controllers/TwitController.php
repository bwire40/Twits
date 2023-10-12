<?php

namespace App\Http\Controllers;

use App\Models\Twit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TwitController extends Controller
{
    //
    public function store(): RedirectResponse
    {

        // new database entry
        $twit = Twit::create([
            'content' => request()->get('twit', ''),
            'likes' => 20
        ]);
        // $twit->save();

        // dump(request());
        return redirect()->route('dashboard');
    }
}
