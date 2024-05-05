<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\Mycourses;
use App\Models\video;
use FFMpeg\FFMpeg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    public function index($id)
    {



        $videos = Course::find($id)->video;


        foreach ($videos as $video) {
            // $ffmpeg = FFMpeg::create([
            //     'ffmpeg.binaries' => 'C:/path/ffmpeg.exe',
            //     'ffprobe.binaries' => 'C:/path/ffprobe.exe'
            // ]);

            $videoPath = public_path($video->path);
            // $videoFile = $ffmpeg->open($videoPath);
            // $durationInSeconds = $videoFile->getFormat()->get('duration');

            // // تحويل مدة الفيديو إلى الدقائق
            // $durationInMinutes = gmdate("h:i:s", $durationInSeconds);

            Video::where('id', $video->id)->update([
                'name' => $video->name,
                'path' => $video->path,

            ]);
        }




        $course = course::find($id);
        $video = course::find($id)->video;
        $allCourses = Mycourses::where('courseId', $id)->get();
        return view('course page.lesson', compact('course', 'video', 'allCourses'));
    }

    public function enroll($id)
    {
        $search = [];
        $course = course::find($id);
        $video = course::find($id)->video;
        $allCourses = Mycourses::where('courseId', '', $id)->get();


        foreach ($allCourses as $data) {
            if ($data->status == 'joind' && $data->coursId == $id && $data->userId == auth()->user()->id) {
                $search[] = 'join';
                break;
            }
        }

        if (!empty($search)) {
            return redirect()->back()->with(['course' => $course, 'video' => $video, 'allCourses' => $allCourses]);
        } else {
            $mycourses = new Mycourses();
            $mycourses->name = $course->name;
            $mycourses->status = 'joind';
            $mycourses->userId = auth()->user()->id;
            $mycourses->courseId = $id;
            $mycourses->save();
            return redirect()->back()->with(['course' => $course, 'video' => $video, 'allCourses' => $allCourses]);
        }



    }

}
