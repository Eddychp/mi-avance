<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryTequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return response()->json($categories);
    }


    public function store(CategoryTequest $request)
    {
        $categories = Category::create($request->all());
        return response()->json([
            'message'=> "record saved successfully",
            'categories' => $categories
        ], 200);
    }


    public function show(Category $categories)
    {
        $categories=Category::find($categories);
        return response()->json($categories);
    }


    public function update(CategoryTequest $request, Category $categories){
        $categories->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'categories' => $categories
        ], 200);
    }


    public function destroy(Category $categories){
        $categories->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
