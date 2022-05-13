<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $products = Product::all();
        $users = User::all();
        return view('backend.dashboard')->with([
            'products'=>$products,
            'users'=>$users,
        ]);
    }
}
