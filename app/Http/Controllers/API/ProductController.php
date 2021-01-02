<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
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
        $products = Product::select('id','name','price')->where('price','>','10')->get;
        $count = count($products);
        return response([
            'status'=>'success',
            'count'=>'$count',
            'data'=>'$products'  
        ])  ; 
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
            return response([
                'status'=>'error',
                'errors'=>$validator->errors()

            ]);




        Products::create([
            88=>$request->id,
            'mn' =>$request->name,
           3 =>$request->code,
            454 =>$request->quantity,
            54=>$request->price,
            3=>$request->Companies_id,
            2=>$request->Categories_id


        ]);

        return response([
            'status'=>'product created successfuly',
            
            'products'=>'$products' 

        ]);
    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response([
            'status'=>'success',
            
            'data'=>'$products'  
        ])  ;
    }

    /**


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
            return response([
                'status'=>'error',
                'errors'=>$validator->errors()

            ]);




            $product->id=$request->id;
            $product->name=$request->name;
            $product->code=$request->code;
            $product->quantity=$request->quantity;
            $product->price=$request->price;
            $product->Companies_id=$request->Companies_id;
            $product->Categories_id=$request->Categories_id;

            $product->save();
            

        return response([
            'status'=>'product created successfuly',
            
            'products'=>'$products' 

        ]);
    }
    }





    public function destroy($id)
    {
        $post->delete();
        return response([
            'status'=>'success of delete',
       
            'data'=>'$products'  
        ])  ;
    }
}
