<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objet;

class ApiController extends Controller
{
    public function subobjets($id)
    {
        return Objet::find($id)->subobjets;
    }
}
