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


    public function show(Investigation $investigation)
    {
        $investigation=Investigation::find($investigation);
        return response()->json($investigation);
    }


    public function update(InvestigationPostRequest $request, Investigation $investigation){
        $investigation->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'areas' => $investigation
        ], 200);
    }


    public function destroy(Investigation $investigation){
        $investigation->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
