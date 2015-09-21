<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    /**
     * 列出所有已输入的学生信息
     *
     * @return Response
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add(Request $request)
    {
        $student = Student::create($request->all());
        dd($student);
    }
}
