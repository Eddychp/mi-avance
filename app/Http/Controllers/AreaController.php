<?php

namespace App\Http\Controllers;

use App\Http\Requests\AreaRequest;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function index()
    {
        $areas=Area::all();
        return response()->json($areas);
    }


    public function store(AreaRequest $request)
    {
        $areas = Area::create($request->all());
        return response()->json([
            'message'=> "record saved successfully",
            'areas' => $areas
        ], 200);
    }


    public function show(Area $areas)
    {
        $areas=Area::find($areas);
        return response()->json($areas);
    }


    public function update(AreaRequest $request, Area $areas){
        $areas->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'areas' => $areas
        ], 200);
    }


    public function destroy(Area $areas){
        $areas->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
