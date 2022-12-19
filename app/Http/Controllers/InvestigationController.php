<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestigationPostRequest;
use App\Http\Requests\InvestigationRequest;
use App\Models\Investigation;
use Illuminate\Http\Request;

class InvestigationController extends Controller
{
    public function index()
    {
        $investigations=Investigation::all();
        return response()->json($investigations);
    }


    public function store(InvestigationPostRequest $request)
    {
        $investigations = Investigation::create($request->all());
        return response()->json([
            'message'=> "record saved successfully",
            'investigations' => $investigations
        ], 200);
    }


    public function show(Investigation $investigations)
    {
        $investigations=Investigation::find($investigations);
        return response()->json($investigations);
    }


    public function update(InvestigationPostRequest $request, Investigation $investigations){
        $investigations->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'areas' => $investigations
        ], 200);
    }


    public function destroy(Investigation $areas){
        $areas->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
