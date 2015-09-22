<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use Laracasts\Flash\Flash;

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
        //dd($student);
        Flash::success("你的信息（" . $student->name . " "
                                  . $student->sex . " "
                                  . $student->age . " "
                                  . $student->height . " "
                                  . $student->weight . "）已经成功添加");

        return back();
    }

    public function delete(Request $request)
    {
        $student = Student::destroy($request['student-id']);

        Flash::success("学生“" . $request['student-name'] . "”已经删除");
        return back();
    }
}
