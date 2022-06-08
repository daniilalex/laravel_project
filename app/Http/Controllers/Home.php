<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubscribeReq;

class HomeController extends Controller
{
    public function soon()
    {
        return view('pages.soon');
    }

    public function subscribe(CreateSubscribeReq $request)
    {
        $data = $request->validated();

    }
}


