<?php

namespace App\Http\Controllers\Dashboard;
use App\Categories;
use App\Companies;
use App\Http\Controllers\Controller;
use App\Products;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = Categories::all();
        $products = Products::all();
        return view('dashboard.products.index',compact('products','categories'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categories::all();
        $companies = Companies::all();
        return view('dashboard.products.create',compact('categories','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

      $rules([
         'id'=>'required|integer', 
         'name'=>'required|max:20',
         'code'=>'required|unique:products|integer',
         'Companies_id'=>'required',
         'Categories_id'=>'required'

      ]);


      $masseges([
            'id.required' => 'The Product id field should be entered',
            'name.required' => 'The Product name field should be entered',
            'id.required' => 'The Product id field should be entered',
            'name.max' => 'name should not be more than 50 character',
            'code.unique' => 'Product code should not duplicated',
            'Companies_id.required' => 'The Product Companies_id field should be entered',
            'name.Categories_id' => 'The Product Categories_id field should be entered',
            'id.integer' => 'The Product id field should be integer',
            'code.integer' => 'The Product code field should be integer'


     ]);  
     
     $validator = Validator::make($request->all(),$rules,$masseges);
     if($validator->fails()){
         return redirect()->back()->withErrors($validator->errors())->withInput();



      $product = new Products();
      $product->id=$request->id;
      $product->name=$request->name;
      $product->code=$request->code;
      $product->quantity=$request->quantity;
      $product->price=$request->price;
      $product->Companies_id=$request->Companies_id;
      $product->Categories_id=$request->Categories_id;




      $product->save();
      return redirect()->route('dashboard.products.index')->with('success','Post created successffuly');

    }}

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $categories = Categories::all();
        $companies = Companies::all();
        return view('dashboard.products.edit',compact('product','categories','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->id=$request->id;
        $product->name=$request->name;
        $product->code=$request->code;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->Companies_id=$request->Companies_id;
        $product->Categories_id=$request->Categories_id;
  
  
  
  
        $product->save();
        return redirect()->route('dashboard.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $post->delete();
        return redirect()->route('dashboard.products.index');
    }
}
