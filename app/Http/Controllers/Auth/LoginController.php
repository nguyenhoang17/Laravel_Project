<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        
        // $credentials = $request-> validate([
        //     'email'=> ['required','email'],
        //     'password'=>['required'],
        // ]);

        $credentials = $request-> validate([
            'email'=> ['required','email'],
            'password'=>['required'],
        ]);
        //remember me
        if($request -> get('remember')){
            $remember = true;
        }else{
            $remember = false; 
        }

        if(Auth::attempt($credentials, $remember)){
            //Facades Auth: cho phép truy cập vào những tính năng liên quan tới auth troog laravel
            //attempt: chấp nhận cặp key- value và kiểm tra xem có khớp hay k. true nếu khớp vs database false ngược lại.
            //trả về true thì tạo session và redirect tới dashboard
            $request -> session()-> regenerate();

            return redirect()-> intended('/');
        }
             //ngược lại quay lại trang login và hiện thông báo.
            return back()-> withErrors([
                'email' => 'The provided credentials do not match our records'
            ]);
        
    }

    public function logout(Request $request){
        
        Auth::guard('web')-> logout();
        $request -> session()-> invalidate(); //vô hiệu hóa session cũ tránh vc sdung lại session
        $request -> session()-> regenerateToken(); //regen lại Token khác cho session
        
        return redirect('/login');
    }
}
