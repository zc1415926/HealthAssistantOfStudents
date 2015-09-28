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
    public function admin()
    {
        $students = Student::all();

        return view('student.admin', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add(Request $request)
    {
        $student = Student::create($request->all());

        if($student)
        {
            Flash::success("你的信息（" . $student->name . " "
                . $student->sex . " "
                . $student->age . " "
                . $student->height . " "
                . $student->weight . "）已经成功添加");
        }
        else
        {
            Flash::error("未成功添加学生信息");
        }

        return back();
    }

    public function delete(Request $request)
    {
        $student = Student::destroy($request['student-id']);

        if($student)
        {
            Flash::success("学生“" . $request['student-name'] . "”已经删除");
        }
        else
        {
            Flash::error("未成功删除学生");
        }

        return back();
    }
}
