<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // $request -> validate([
        //     'name'=> ['required','string','max: 255'],
        //     'email'=> ['required','string','email','max: 255','unique:users'],
        //     'password'=> ['required','confirmed',Rules\Password::defaults()],
        // ]);
        $request -> validate([
            'name'=> ['required','string','max: 255'],
            'email'=> ['required','string','email','max: 255','unique:users'],
            'address'=>['required','string'],
            'phone'=> ['required','min:11','numeric'],
            'password'=> ['required','confirmed',Rules\Password::defaults()],
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        
        $data = $request  -> all();
        
        $user = new User();
       
        if($request->hasFile('image')){
            $disk = 'images';
            $path = $request->file('image')->store('avatars', $disk);
            $user->disk = $disk;
            $user->image = $path;
            }
        $user -> name = $data['name'];
        $user -> email = $data['email'];
        $user -> address = $data['address'];
        $user-> phone = $data['phone'];
        $user -> password =Hash::make( $data['password']);

       
        
            $user -> save();
        Auth::login($user, $remember = true);
        return redirect('/');
    }
}
