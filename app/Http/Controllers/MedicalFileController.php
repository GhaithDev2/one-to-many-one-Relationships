<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicalFileRequest;
use App\Http\Requests\UpdateMedicalFileRequest;
use App\Models\MedicalFile;
use App\Models\Student;
use Illuminate\Http\Request;

class MedicalFileController extends Controller
{
      public function store(StoreMedicalFileRequest $request){
        if(MedicalFile::where('student_id',$request->student_id)->exists()){
            return response()->json([
                "message"=>'this student already has a medical file'
            ],422);
        }
        else
        MedicalFile::query()->create($request->only(['blood_type','emergency_phone_number','student_id']));

    }



        public function show($id){
            $student=Student::with('medicalFile')->find($id);
            return response()->json($student->medicalFile);

    }



        public function update(UpdateMedicalFileRequest $request,$id){

            $updated=MedicalFile::query()->update($request->validated());
            return response()->json($updated);



        }




}
