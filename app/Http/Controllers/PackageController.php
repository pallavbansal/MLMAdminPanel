<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
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
        $package = new package;
        $package->package_name = $request->input('package_name');
        $package->company_id = $request->input('company');
        $package->price = $request->input('price');
        $package->admin_percentage = $request->input('admin_percentage');
        $package->a1_percentage = $request->input('a1_percentage');
        $package->a2_percentage = $request->input('a2_percentage');
        $package->a3_percentage = $request->input('a3_percentage');
        $package->admin_percentage2 = $request->input('admin_percentage2');
        $package->a1_percentage2 = $request->input('a1_percentage2');
        $package->a2_percentage2 = $request->input('a2_percentage2');
        $package->a3_percentage2 = $request->input('a3_percentage2');
        $package->save();
        $request->session()->flash('msg',"Date Saved !");
        return redirect('admin/UploadPackageType');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(package $package)
    {
        $package = DB::table('packages')
          ->select('packages.id','packages.package_name','packages.company_id','companies.company_name','packages.price','packages.admin_percentage','packages.a1_percentage','packages.a2_percentage','packages.a3_percentage','packages.admin_percentage2','packages.a1_percentage2','packages.a2_percentage2','packages.a3_percentage2')
          ->join('companies','companies.id','=','packages.company_id')
          ->get();
          
        return view('admin.UploadPackageType')->with('company',company::all())->with('package',$package);
        //return view('admin.UploadPackageType')->with('package',package::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(package $package,$id)
    {
        package::destroy(array('id',$id));
        return redirect('admin/UploadPackageType');
    }
    public function uploadpackageType(Request $request)
    {
        $request->validate([
            'package_name' => 'required',
            'inputCategory' => 'required',
            'price' => 'required'
        ]);
    }
}
