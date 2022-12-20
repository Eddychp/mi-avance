<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentPostRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students=Student::all();
        //return $schools;
        return response()->json($students);
    }

    public function show(Student $student){
        $student=Student::find($student);
        return response()->json($student);
    }

    public function store(StudentPostRequest $request){
        $student = Student::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'student' => $student
        ], 200);
    }

    public function update(StudentPostRequest $request, Student $student){
        $student->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'student' => $student
        ], 200);
    }

    public function destroy(Student $student){
        $student->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
