<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementRequest;
use App\Http\Requests\ResultRequest;
use App\Models\Announcement;
use App\Models\Result;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function index()
    {
        $announcements=Announcement::all();
        return response()->json($announcements);
    }


    public function store(AnnouncementRequest $request)
    {
        $announcements = Announcement::create($request->all());
        return response()->json([
            'message'=> "record saved successfully",
            'announcements' => $announcements
        ], 200);
    }


    public function show(Announcement $announcements)
    {
        $announcements=Announcement::find($announcements);
        return response()->json($announcements);
    }


    public function update(AnnouncementRequest $request, Announcement $announcements){
        $announcements->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'announcements' => $announcements
        ], 200);
    }


    public function destroy(Announcement $announcements){
        $announcements->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
