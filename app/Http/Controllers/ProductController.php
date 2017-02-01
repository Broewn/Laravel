<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('product.create', ['categories' => $categories], ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=> 'required',
        'idcategory' => 'required'
        ]);
        
        
        $product = new Product;
        $product->description = $request->description;
        $product->name = $request->name;
        $product->price =  empty($request->price) ? null: $request->price;
        $product->shippingcost = empty($request->shippingcost) ? null: $request->shippingcost;
        $product->totalrating = empty($request->totalrating) ? null: $request->totalrating;
        $product->thumbnail = $request->thumbnail;
        $product->image = $request->image;
        $product->discountpercentage = empty($request->discountpercentage) ? null: $request->discountpercentage;
        $product->idcategory = $request->idcategory;
        $product->votes = empty($request->votes) ? null: $request->votes;
        $product->save();
        
        return redirect()->route('product.index')->with('alert-success','Nieuw product opgeslaan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::all();
        $product = Product::find($id);
        $category = Category::find($product->idcategory);
        
        return view('product.show',array(  'products'=>$products,
                                            'product'=>$product,
                                            'category'=>$category));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::all();
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit', array('product'=> $product, 'products'=>$products, 'categories' =>$categories));
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
        
        $this->validate($request,[
        'name'=> 'required',
        'idcategory' => 'required'
        ]);
        
        
        $product = Product::findOrFail($id);
        $product->description = $request->description;
        $product->name = $request->name;
        $product->price =  empty($request->price) ? null: $request->price;
        $product->shippingcost = empty($request->shippingcost) ? null: $request->shippingcost;
        $product->totalrating = empty($request->totalrating) ? null: $request->totalrating;
        $product->thumbnail = $request->thumbnail;
        $product->image = $request->image;
        $product->discountpercentage = empty($request->discountpercentage) ? null: $request->discountpercentage;
        $product->idcategory = $request->idcategory;
        $product->votes = empty($request->votes) ? null: $request->votes;
        $product->save();
        
        return redirect()->route('product.index')->with('alert-success','Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('alert-success','Deleted');
    }
}
