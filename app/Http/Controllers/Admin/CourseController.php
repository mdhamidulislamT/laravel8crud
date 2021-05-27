<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
     //--store data in database--//
   public function storeNewCourse(Request $req)
   {
       $course =new Course();       
        //--to upload image in database--//
        $file = time().'.'.$req->CourseImage->getClientOriginalExtension();
        $req->CourseImage->move(public_path('avatars'), $file);

       $course->course_title = $req->CourseTitle;
       $course->total_hour = $req->TotalHour;
       $course->total_class = $req->TotalClass;
       $course->fee = $req->CourseFee;
       $course->course_image = $file;
       $result = $course->save();

       if ($result) {
           return redirect('admin/dashboard');
       } else {
        return redirect('admin/addCourseForm');
       }
   }

   public function getcourseList()
   {
       $courses = Course::paginate(7);
       return view('admin/courseList', ['courses'=>$courses]);
   }


}
