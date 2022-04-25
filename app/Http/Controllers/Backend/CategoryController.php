<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $categories = DB::table('categories')->orderBy('created_at','desc')->get();
        $categories = Category::orderBy('created_at','desc')->paginate(3);

        
        
        return view('backend.categories.list', ['categories'=> $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
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
            'name' => 'required|unique:categories|max:255',
        ]);
        $data=$request-> all(); 
        // DB::table('categories')-> insert([
        //     'name' => $data['name'],
        //     'created_at'=> now(),
        //     'updated_at'=> now()
        // ]);
       
        $category = new Category();
        $category -> name = $data['name'];
        $category -> save();
        $request->session()->flash('success', 'Created category successfully');
        return redirect()-> route('backend.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.categories.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.categories.edit', ['category'=> $category]);
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
            'name' => 'required|unique:categories|max:255',
        ]);
        $data= $request-> only('name');
        // DB::table('categories')-> where('id', $id)
        // ->update([
        //     'name'=> $data['name'],
        //     'created_at'=> now(),
        //     'updated_at'=> now()
        // ]);

        $category = Category::find($id);
        $category -> name = $data['name'];
        $category-> save();
        $request->session()->flash('success', 'Updated post successfully');
        return redirect()-> route('backend.categories.index');
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

        Category::find($id)->delete($id);
        return redirect()-> route('backend.categories.index')->with('success', 'Deleted category successfully');
    }

    // //List da xoa mem
    // public function listSoftDelete()
    // {
    //     $categories = Category::onlyTrashed()->get();
    //     return view('backend.categories.listsoftdelete', ['categories'=> $categories]) ;
    // }

    // public function restoreCategory($id){
    //     $category = Category::onlyTrashed()->where('id', $id)-> first();
    //     $category ->restore();
    //     return redirect()-> route('backend.categoriesSoftDelete');
    // }
}
