<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Usercontroller extends Controller
{

    public function uploadAvatar(Request $request){
        // $request->image->store("images", "public");
        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Image uploaded');
        }
        return redirect()->back()->with('error', 'Image Not uploaded');
    }

  

    public function index(){

        // $user = new User();
        // $user->name = 'Rahul';
        // $user->email = 'rahul@test.com';
        // $user->password = bcrypt('password');
        // $user->save();

        // User::where('id',1)->delete();

        // User::where('id', 3)->update(['email'=> 'rohith@test.com']);

        // $data = [
        //     'name' => 'rohith',
        //     'email' => 'rohith@test.com',
        //     'password'=> 'password'
        // ];
        // User::create($data);
        

        $user = User::all();
        return  $user;
    }
}
