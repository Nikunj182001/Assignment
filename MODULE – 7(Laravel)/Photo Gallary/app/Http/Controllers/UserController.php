<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $img = Images::all();

        return view('index', compact('img'));
    }


}
