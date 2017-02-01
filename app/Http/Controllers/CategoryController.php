<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('category.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate
        (
            $request, 
            ['description' => 'max:1024',
            'name' => 'required|max:255']
        );
        
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        
        return redirect()->route('category.index')->with('alert-success','Nieuwe categorie opgeslaan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        return view('category.show',array('category'=>$category, 'categories'=>$categories));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        return view('category.edit', array('category'=> $category, 'categories'=>$categories));
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
        $this->validate
        (
            $request, 
            ['name' => 'required|max:255']
        );
        
        $category = Category::find($id);
        $category->Name = $request->input('name');
        $category->Description = $request->input('description');
        $category->save();
        
        
        return redirect()->route('category.index')->with('alert-success','Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $producten = Product::where('idcategory', '=', $id)->first();
        
        
        if ($producten){
            return redirect()->route('category.index')->with('alert-danger', 'Category is gelinkt aan een product');
        }
        else{
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->route('category.index')->with('alert-success','Deleted');
        }
        
    }
}
