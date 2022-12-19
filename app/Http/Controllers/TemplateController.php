<?php

namespace App\Http\Controllers;

use App\Http\Requests\TemplatePostRequest;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
    public function index(){
        $templates=Template::all();
        //return $schools;
        return response()->json($templates);
    }

    public function show(Template $template){
        return response()->download(public_path(Storage::url($template->file)), $template->title);
    }

    
    public function store(Request $request)
    {
        $template = request()->all();
        if ($request->hasFile('file')) {

            $destination_path = 'public/templates';
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $path = $request->file('file')->storeAs($destination_path, $file_name);
            $template['file'] = $file_name;
        }
        Template::create($template);
        return response()->json([
            'message' => "record saved successfully!",
            'template' => $template
        ], 200);
    }

    public function update(TemplatePostRequest $request, Template $template){
        $template->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'template' => $template
        ], 200);
    }

    public function destroy(Template $template){
        $template->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
