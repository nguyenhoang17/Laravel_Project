<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = \request()-> get('name');
        $email = \request()->get('email');
        $phone = \request()->get('phone');
        // $users_query = DB::table('users')-> 
        $users_query= User::
        select();
            if(!empty($name)){
                $users_query = $users_query -> where('name', "LIKE", "%$name%");
            }

            if(!empty($email)){
                $users_query = $users_query -> where('email', "LIKE", "%$email%");
            }
            if(!empty($phone)){
                $users_query = $users_query -> where('phone', "LIKE", "%$phone%");
            }
        $users = $users_query-> orderBy('created_at','desc')->paginate(10);
       return view('backend.users.list')-> with([
           'users' => $users
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request  -> all();
        $user = new User;
        $user -> name = $data['name'];
        $user -> email = $data['email'];
        $user -> phone = $data['phone'];
        $user -> address = $data['address'];
        $user ->role = $data['role'];
        $user -> password =Hash::make( $data['password']);
        if($request->hasFile('image')){
            $disk = 'images';
            $path = $request->file('image')->store('avatars', $disk);
            $user->disk = $disk;
            $user->image = $path;
            }
        $user-> save();
        $request->session()->flash('success', 'Create user successfully');
        return redirect()-> route('backend.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.users.edit')-> with([
            'user'=> $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request  -> all();
        $user = User::find($id);
        $user ->role = $data['role'];
        $user-> save();
        $request->session()->flash('success', 'Updated user successfully');
        return redirect()-> route('backend.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)-> destroy($id);
        return redirect()-> route('backend.users.index')->with('success', 'Deleted User successfully');

    }

    public function listDestroy(){
        $name = \request()-> get('name');
        $email = \request()->get('email');
        $phone = \request()->get('phone');
        // $users_query = DB::table('users')-> 
        $users_query= User::
        select();
            if(!empty($name)){
                $users_query = $users_query -> where('name', "LIKE", "%$name%");
            }

            if(!empty($email)){
                $users_query = $users_query -> where('email', "LIKE", "%$email%");
            }
            if(!empty($phone)){
                $users_query = $users_query -> where('phone', "LIKE", "%$phone%");
            }
        $users = $users_query-> onlyTrashed()-> paginate(10);
        return view('backend.users.list_deleted')-> with([
            'users'=> $users
        ]);
    }

    public function restoreUser($id){
         User::onlyTrashed()->where('id',$id)->restore();
         return redirect()-> route('backend.users.index')->with('success', 'Deleted User successfully');
    }
}
