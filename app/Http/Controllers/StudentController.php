<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $student=Student::query()->get();
        return response()->json($student);

    }



    public function store(StoreStudentRequest $request){
        Student::query()->create($request->only(['name']));

    }





    public function show($id){
       $student= Student::with('medicalFile')->find($id);
       return response()->json($student);

    }
}
