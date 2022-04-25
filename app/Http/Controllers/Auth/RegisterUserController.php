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
            'password'=> ['required','confirmed',Rules\Password::defaults()],
            // 'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);
        
        $data = $request  -> all();
        
        $user = new User();
       
        if($request->hasFile('avatar')){
            $disk = 'public';
            $path = $request->file('avatar')->store('avatars', $disk);
            $user->disk = $disk;
            $user->avatar = $path;
            }
        $user -> name = $data['name'];
        $user -> email = $data['email'];
        $user -> password =Hash::make( $data['password']);

        // $user = User::create([
        //     'name'=> $request->name,
        //     'email'=> $request-> email,
        //     'password'=> Hash::make($request->password),
            
        // ]);
        
            $user -> save();
        Auth::login($user, $remember = true);
        return redirect('backend/dashboard');
    }
}
