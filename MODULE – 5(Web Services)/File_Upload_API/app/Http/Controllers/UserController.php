<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->file('file'))
        {
            $file = $request->file;
            $files = $file->getClientOriginalName();
            $file->move(public_path("images/"),$files);
        }
        else
        {
            $files = "No File";
        }

        $user = new User();

        $user->name = $request->name;
        $user->file = $files;
        $token = Str::random(60);

        $user->save();
        
        return response()->json(['content'=>'Inserted','token'=>$token]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    

    public function update(Request $request, $id)
    {
        $user = new User();

        if($request->file('file'))
        {
            $file = $request->file;
            $files = $file->getClientOriginalName();
            $file->move(public_path("images/"),$files);
        }
        else
        {
            $files = $user->file;
        }
        $data = [
            'name' => $request->name,
            'file' => $files
        ];
        $token = Str::random(60);

        $user->update($data);
        return response()->json(['content'=>'Updated','token'=>$token]);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        File::delete(public_path("images/$user->file"));
        $user->delete();

        return response()->json(['content'=>'Deleted']);
        
    }
}
