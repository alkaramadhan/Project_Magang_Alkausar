<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Image;

class ProfileController extends Controller
{
    public function edit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
           
            if ($user){
            return view('pembeli.edit_profile')->withUser($user);
            } else {
                return redirect()->back(); 
            }
        }else {
            return redirect()->back(); 
        }
    }
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->email === $request['email']){
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email'
                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email|unique:users',
                    'avatar' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
                ]);
            }
            
            if ($validate) {
            $user->name = $request['name'];
            $user->email = $request['email'];
            
            if($request->hasFile('avatar')){
                $avatar = $request->file('avatar');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('image/avatar/'. $filename) );

                $user = Auth::user();
                $user->avatar = $filename;
                $user->save();
            }

            $user->save();
            $request->session()->flash('success', 'OKEHHHHH');
            return redirect()->back();
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }
}
