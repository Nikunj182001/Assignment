<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('admin.dashboard');
    }

    function store(Request $request)
    {
        $img = new Images();

        if ($request->file('file')) {
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move(public_path("assets/img/"), $filename);
        }

        $img->image = $filename;

        $img->save();
        return redirect()->back()->with("content", "Pic Added Successfully");
    }
}
