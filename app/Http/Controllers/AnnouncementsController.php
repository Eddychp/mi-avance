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


    public function update(AnnouncementRequest $request, Announcement $announcement){
        $announcement->update($request->all());
<<<<<<< HEAD
        return response()->json([
            'message' => "record updated successfully!",
            'announcements' => $announcement
=======

        return response()->json([
            'message' => "record updated successfully!",
            'announcement' => $announcement
>>>>>>> 08dfa07482f26aedec1acc3259f5d2843a327bb8
        ], 200);
    }


    public function destroy(Announcement $announcement){
        $announcement->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
