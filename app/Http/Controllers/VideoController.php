<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index($name, $id)
    {
        $course = Course::find($id);
        $videos = $course->video()->get();
        return view('course page.video',compact('videos'));

    }

}
