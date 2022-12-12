<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResultRequest;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $results=Result::all();
        return response()->json($results);
    }


    public function store(ResultRequest $request)
    {
        $results = Result::create($request->all());
        return response()->json([
            'message'=> "record saved successfully",
            'results' => $results
        ], 200);
    }


    public function show(Result $results)
    {
        $results=Result::find($results);
        return response()->json($results);
    }


    public function update(ResultRequest $request, Result $results){
        $results->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'results' => $results
        ], 200);
    }


    public function destroy(Result $results){
        $results->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
