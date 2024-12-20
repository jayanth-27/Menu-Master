<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Products::all();
        $products=DB::select('SELECT * FROM products');
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation for the required fields
        $this->validate($request, [
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'product_image'=>'image|max:1999|nullable'
        ]);
        
        if ($request->hasFile('product_image')) {
            # get file name with extension
            $filenameWithExt=$request->file('product_image')->getClientOriginalName();
            //get file name
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get ext
            $extension=$request->file('product_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload the image
            $path=$request->file('product_image')->storeAs('public/product_images/', $fileNameToStore);
        }
        else{
            $fileNameToStore='noImage.png';
        }
        
        $products= new Products;
        $products->name=$request->input('name');
        $products->price=$request->input('price');
        $products->description=$request->input('description');
        $products->user_id=auth()->user()->id;
        $products->access=auth()->user()->access;
        $products->product_image= $fileNameToStore;

        $products->save();

        return redirect('products')->with('success', 'Product Created Successfull!!');
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
        //
        $products=Products::find($id);

        return view('products.edit')->with('products', $products);
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
        //validation for the required fields
        $this->validate($request, [
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'product_image'=>'image|max:1999|nullable'
        ]);
        
        if ($request->hasFile('product_image')) {
            # get file name with extension
            $filenameWithExt=$request->file('product_image')->getClientOriginalName();
            //get file name
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get ext
            $extension=$request->file('product_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload the image
            $path=$request->file('product_image')->storeAs('public/product_images/', $fileNameToStore);
        }
        /* else{
            $fileNameToStore='noImage.png';
        } */
        $products= Products::find($id);
        $products->name=$request->input('name');
        $products->price=$request->input('price');
        $products->description=$request->input('description');
        $products->user_id=auth()->user()->id;
        $products->access=auth()->user()->access;
        if ($request->hasFile('product_image')) {
            $products->product_image= $fileNameToStore;
        }
        $products->save();

        return redirect('products')->with('success', 'Product Updated Successfull!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products=Products::find($id);
        /* if(auth()->user()->id !==$products->user_id){
            return redirect('products')->with('error', 'Unauthorised page!');
        } */
        if($products->product_image != 'noImage.png'){
            Storage::delete('public/product_images/'.$products->product_image);
        }
        $products->delete();
        return redirect('products')->with('success', 'Product Deleted Successfully!!');
    }
}
