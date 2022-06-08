<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function soon()
    {
        return view('pages/soon');
    }

    public function subscribe(Request $request)
    {
        $data = $request->all();
        return view('pages/soon', $data);
    }
}
