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


    public function show(Area $area)
    {
        $area=Area::find($area);
        return response()->json($area);
    }


    public function update(AreaRequest $request, Area $area){
        $area->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'areas' => $area
        ], 200);
    }


    public function destroy(Area $area){
        $area->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
