<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show()
    {
        return view('test',[
            'name'=> request('name') . " Again"
        ]);
    }
}
