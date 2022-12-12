<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObservationRequest;
use App\Models\Observation;
use Illuminate\Http\Request;

class ObservationController extends Controller
{
    public function index()
    {
        $observations=Observation::all();
        return response()->json($observations);
    }


    public function store(ObservationRequest $request)
    {
        $observations = Observation::create($request->all());
        return response()->json([
            'message'=> "record saved successfully",
            'observations' => $observations
        ], 200);
    }


    public function show(Observation $observations)
    {
        $observations=Observation::find($observations);
        return response()->json($observations);
    }


    public function update(ObservationRequest $request, Observation $observations){
        $observations->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'observations' => $observations
        ], 200);
    }


    public function destroy(Observation $observations){
        $observations->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
