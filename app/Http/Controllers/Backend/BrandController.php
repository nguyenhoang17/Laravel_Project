<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $name = \request()-> get('name');
        // $users_query = DB::table('users')-> 
        $brands_query= Brand::select();
            if(!empty($name)){
                $brands_query = $brands_query -> where('name', "LIKE", "%$name%");
            }
        
        $brands = $brands_query->orderBy('created_at','desc')->paginate(10);

        
        
        return view('backend.brands.list', ['brands'=> $brands]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'name' => 'required|unique:brands|max:255|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $data=$request-> all(); 
        $brand = new Brand();
        $brand->name = $data['name'];
        if($request->hasFile('image')){
            $disk = 'images';
            $path = $request->file('image')->store('brands', $disk);
            $brand->disk = $disk;
            $brand->path = $path;
            }
        $brand->save();
        $request->session()->flash('success', 'Created Brand successfully');
        return redirect()-> route('backend.brands.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brands.edit', ['brand'=> $brand]);
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
        $validated = $request -> validate([
            'name' => 'required|unique:brand|max:255|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);
        $data= $request-> all();

        $brand = Brand::find($id);
        $brand -> name = $data['name'];
        if($request->hasFile('image')){
            $disk = 'images';
            $path = $request->file('image')->store('brands', $disk);
            $brand->disk = $disk;
            $brand->path = $path;
            }
        $brand-> save();
        // $deleteImg = $request->delete_img;
        // if (!empty($deleteImg)) {
            
        //         Storage::disk('images')->delete($deleteImg->path);
            
        // }
        $request->session()->flash('success', 'Updated brand successfully');
        return redirect()-> route('backend.brands.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // DB::table('categories')-> where('id',$id)->delete();

        Brand::find($id)->delete($id);
        return redirect()-> route('backend.brands.index')->with('success', 'Deleted brand successfully');
    }
}
