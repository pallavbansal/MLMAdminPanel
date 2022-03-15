<?php

namespace App\Http\Controllers;

use App\Models\Cat1Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cat1Order  $cat1Order
     * @return \Illuminate\Http\Response
     */
    public function show(Cat1Order $cat1Order)
    {
        $users = DB::table('users')
        ->select('*')
        ->join('bank_accounts','bank_accounts.user_id','=','users.id')
        ->get();
      
      return view('admin.AllRegisteredUsers')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cat1Order  $cat1Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat1Order $cat1Order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cat1Order  $cat1Order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat1Order $cat1Order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cat1Order  $cat1Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat1Order $cat1Order)
    {
        //
    }
}
