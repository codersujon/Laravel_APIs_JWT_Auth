<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\StoreUserRequest;

class CourseController extends Controller
{
    /**
     * Course Entrollment (POST, formdata)
     */
    public function courseEntroll(StoreCourseRequest $request){

    }

    /**
     * List Courses by User ID (GET)
     */
    public function listCourses(){

    }

    /**
     * Delete User Course (DELETE)
     */
    public function deleteCourse($course_id){

    }


}
