<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destinationPath = '';
        $name = '';
      
        $this->validate($request, [
            'media' => 'required|image|mimes:jpeg,png,jpg,bmp,gif',
          ]);
          if ($request->hasFile('media')) {
            $image = $request->file('media');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/uploads/');
            $image->move($destinationPath, $name);
          }
       
        $product = new product();
        $product->product_name = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->product_media_url = '/storage/uploads/'.$name;
        $product->save();
        $request->session()->flash('msg',"Date Saved !");
        return redirect('admin/UploadProducts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        $products = DB::table('products')
        ->select('products.id','products.product_name','products.category_id','products.price','products.product_media_url','categories.category_name')
        ->join('categories','categories.id','=','products.category_id')
        ->get();
     
      return view('admin.UploadProducts')->with('products',$products)->with('categories',Category::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,$id)
    {
        product::destroy(array('id',$id));
        return redirect('admin/UploadProducts');
    }
    public function uploadproducts(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string',
            'category_id' => 'required',
            'price' => 'required',
            'media' => 'required'
  
        ]);
    }
}
