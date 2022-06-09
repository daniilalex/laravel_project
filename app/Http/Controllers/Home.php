<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubscribeReq;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Redirect;

class Home extends Controller
{
    public function soon()
    {
        return view('pages.soon');
    }

    public function subscribe(CreateSubscribeReq $request)
    {
        $data = $request->validated();
        Subscriber::create($data);
       
        return Redirect::back()->with('message', 'Successfully added');
    }
}


