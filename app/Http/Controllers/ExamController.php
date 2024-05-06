<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function index($id, $ques_num)
    {
        $course = Course::find($id);
        $examData = DB::table('examsdata')->where('course_id', $id)
            ->where('ques_num', $ques_num)
            ->first();
        return view('exam.exam')->with(['course' => $course, 'examData' => $examData]);
    }

    public function next($id, $ques_num)
    {
        $nextQuestionNum = $ques_num + 1;
        $examData = DB::table('examsdata')->where('course_id', $id)
            ->where('ques_num', $nextQuestionNum)
            ->first();
        if ($examData) {
            return redirect()->route('exam.show', ['id' => $id, 'ques_num' => $nextQuestionNum]);
        } else {
            return redirect()->route('exam.show', ['id' => $id, 'ques_num' => $ques_num]);
        }
    }

    public function previous($id, $ques_num)
    {
        $prevQuestionNum = $ques_num - 1;
        if ($prevQuestionNum >= 1) {
            return redirect()->route('exam.show', ['id' => $id, 'ques_num' => $prevQuestionNum]);
        } else {
            return redirect()->route('exam.show', ['id' => $id, 'ques_num' => $ques_num]);
        }
    }
}
