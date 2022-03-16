<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
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
        $company = new Company;
        $company->company_name = $request->input('company_name');
        $company->parent_category_id = $request->input('parent_category_id');
        $company->save();
        $request->session()->flash('msg',"Date Saved !");
        return redirect('admin/UploadMonitoringProvider');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        $company = DB::table('companies')
        ->select('companies.id','companies.company_name','companies.parent_category_id','parent_categories.parent_category_name')
        ->join('parent_categories','parent_categories.id','=','companies.parent_category_id')
        ->get();
        return view('admin.UploadMonitoringProvider')->with('company',$company)->with('parentCategory',ParentCategory::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company,$id)
    {
        company::destroy(array('id',$id));
        return redirect('admin/UploadMonitoringProvider');
    }
}
