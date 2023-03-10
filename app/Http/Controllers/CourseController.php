<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){
        return view('course.create');
    }

    public function store(CourseRequest $request){ 
        
        $course = Course::create([
            'name' => $request->name,
            'description' =>$request->description,
            'stylist' =>$request->stylist,
            'level' =>$request->level,
            'price' =>$request->price,
            'startdate' =>$request->startdate,
            'certificate' =>$request->certificate,
            'coverimg' =>$request->file('coverimg')->store('public/covers'),
        ]);
            return redirect(route('homepage'))->with('courseCreated', 'Il corso è stato aggiunto correttamente.');
    }
}
