<?php

namespace App\Http\Controllers;
use App\Models\MonitoringProvider;
use Illuminate\Http\Request;


class MonitoringProviderController extends Controller
{
    public function uploadmonitoringprovider(Request $request)
    {
        $request->validate([
            'company_name' => 'required'
        ]);
    }
}
