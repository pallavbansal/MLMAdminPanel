<?php

namespace App\Http\Controllers;

use App\Models\ParentCategory;
use Illuminate\Http\Request;

class ParentCategoryController extends Controller
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
        $parentCategory = new ParentCategory();
        $parentCategory->parent_category_name = $request->input('category_name');
        $parentCategory->max_time = $request->input('max_time');
        $parentCategory->save();
        $request->session()->flash('msg',"Date Saved !");
        return redirect('admin/ParentCategories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParentCategory  $parent_category
     * @return \Illuminate\Http\Response
     */
    public function show(ParentCategory $parentCategory)
    {
        return view('admin.ParentCategories')->with('parentCategory',ParentCategory::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParentCategory  $parent_category
     * @return \Illuminate\Http\Response
     */
    public function edit(ParentCategory $parentCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParentCategory  $parent_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParentCategory $parentCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParentCategory  $parent_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentCategory $parentCategory,$id)
    {
        parentCategory::destroy(array('id',$id));
        return redirect('admin/ParentCategories');
    }
}
