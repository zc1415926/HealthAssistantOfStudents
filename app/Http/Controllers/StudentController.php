<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * StudentController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['admin', 'export']]);
    }

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
            Flash::success("你的信息（" . $student->num . " "
                . $student->sex . " "
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

    public function export()
    {
        Excel::create('students', function($excel){
            $excel->sheet('student', function($sheet){
                $sheet->fromArray(Student::select('num', 'sex', 'height', 'weight')->get());
                $sheet->row(1, array("序号", "性别", "身高（m）", "体重（kg）"));
                $sheet->setWidth(array(
                    'A'     =>  15,
                    'B'     =>  15,
                    'C'     =>  15,
                    'D'     =>  15,
                ));

            });
        })->export('xls');
    }
}