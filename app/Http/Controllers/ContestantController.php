<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContestantRequest;
use App\Models\Contestant;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    public function index()
    {
        $contestants=Contestant::all();
        return response()->json($contestants);
    }


    public function store(ContestantRequest $request)
    {
        $contestants = Contestant::create($request->all());
        return response()->json([
            'message'=> "record saved successfully",
            'contestants' => $contestants
        ], 200);
    }


    public function show(Contestant $contestants)
    {
        $contestants=Contestant::find($contestants);
        return response()->json($contestants);
    }


    public function update(ContestantRequest $request, Contestant $contestants){
        $contestants->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'contestants' => $contestants
        ], 200);
    }


    public function destroy(Contestant $contestants){
        $contestants->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
