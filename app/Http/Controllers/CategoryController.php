<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->parent_category = $request->input('parent_category');
        $category->save();
        $request->session()->flash('msg',"Date Saved !");
        return redirect('admin/UploadCategories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categories = DB::table('categories')
        ->select('*')
        ->get();
   
      return view('admin.UploadCategories')->with('categories',$categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        Category::destroy(array('id',$id));
        return redirect('admin/UploadCategories');
    }
    public function uploadCategories(Request $request)
    {
        $request->validate([
            'inputCity'=>'required',
            'inputState'=>'required',
            'inputPhoto'=>'required'

        ]);
    }
    public function parentcategories(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
            'max_time'=>'required'
        ]);
    }
}
