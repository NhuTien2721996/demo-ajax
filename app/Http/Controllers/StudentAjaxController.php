<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentAjaxController extends Controller
{
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function index()
    {
        $students = $this->student->all();
        return view('student.list', compact('students'));
    }

    public function search(Request $request){
        if($request->ajax()){
            $students=Student::where('name','LIKE','%'.$request->keyword.'%')->get();
            return response()->json($students);
        }
    }

}
