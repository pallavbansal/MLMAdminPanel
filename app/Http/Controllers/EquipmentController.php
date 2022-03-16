<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\package;

class EquipmentController extends Controller
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
            'equipment_media' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
          ]);
          if ($request->hasFile('equipment_media')) {
            $image = $request->file('equipment_media');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/uploads/');
            $image->move($destinationPath, $name);
          }
        
        $equipment = new Equipment;
        $equipment->equipment_name = $request->input('equipment_name');
        $equipment->price = $request->input('equipment_price');
        $equipment->package_id = $request->input('package');
        $equipment->description = $request->input('description');
        $equipment->equipment_media_url = '/storage/uploads/'.$name;//$request->input('equipment_media_url');
        $equipment->save();
        $request->session()->flash('msg',"Date Saved !");
        return redirect('admin/UploadEquipements');
        //return back()->with('success','Image Upload successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        $eqip = DB::table('equipment')
        ->select('equipment.id','equipment.equipment_name','equipment.price','equipment.equipment_media_url','equipment.package_id','equipment.description','packages.package_name')
        ->join('packages','packages.id','=','equipment.package_id')
        ->get();

      return view('admin.UploadEquipements')->with('package',package::all())->with('equipment',$eqip);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment,$id)
    {
        Equipment::destroy(array('id',$id));
        return redirect('admin/UploadEquipements');
    }
    public function UploadEquipements(Request $request)
    {
        $request->validate([
            'equipment_name'=>'required',
            'package'=>'required',
            'description'=>'required',
            'equipment_price'=>'required',
            'inputPhoto'=>'required'
  
        ]);
    } 
}
