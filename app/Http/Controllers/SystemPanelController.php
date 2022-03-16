<?php

namespace App\Http\Controllers;

use App\Models\SystemPanel;
use App\Models\package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SystemPanelController extends Controller
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
        $system_panel = new SystemPanel;
        $system_panel->system_panel_name = $request->input('system_panel_name');
        $system_panel->package_id = $request->input('package');
        $system_panel->save();
        $request->session()->flash('msg',"Date Saved !");
        return redirect('admin/UploadSystemPanel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SystemPanel  $systemPanel
     * @return \Illuminate\Http\Response
     */
    public function show(SystemPanel $systemPanel)
    {
        $system_panel = DB::table('system_panels')
        ->select('system_panels.id','system_panels.system_panel_name','system_panels.package_id','packages.package_name')
        ->join('packages','packages.id','=','system_panels.package_id')
        ->get();

      return view('admin.UploadSystemPanel')->with('package',package::all())->with('system_panel',$system_panel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SystemPanel  $systemPanel
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemPanel $systemPanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SystemPanel  $systemPanel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SystemPanel $systemPanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SystemPanel  $systemPanel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SystemPanel $systemPanel,$id)
    {
        SystemPanel::destroy(array('id',$id));
        return redirect('admin/UploadSystemPanel');
    }
    public function uploadsystempanel(Request $request)
    {
        $request->validate([
            'system_panel_name'=>'required|string',
            'package'=>'required',
            'system_panel_price'=>'required'
        ]);
    }
}
