<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseeditRequest;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    
    
    
    
    
    public function index()
    {

        $courses = Course::all();

        return view('course.index', compact('courses'));
    
    }


    
    public function create(){
        return view('course.create');
    }

    public function store(CourseRequest $request){ 
        
        if ($request->hasFile('coverimg')) {
            $coverimg = $request->file('coverimg')->store('public/covers');
        } else {
            $coverimg = '/media/copertina-non-disponibile.jpg';
        }

        $course = Course::create([
            'name' => $request->name,
            'description' =>$request->description,
            'stylist' =>$request->stylist,
            'level' =>$request->level,
            'price' =>$request->price,
            'startdate' =>$request->startdate,
            'certificate' =>$request->certificate,
            'coverimg' => $coverimg,
            'user_id' => Auth::user()->id,
        ]);
            return redirect(route('course.index'))->with('courseCreated', 'Il corso è stato aggiunto correttamente.');
    }

    public function show(Course $course){

        return view('course.show', compact('course'));

    }


    public function edit(Course $course) {

        if($course->user_id != Auth::id()){
            return redirect(route('course.index'))->with('accessDenied', 'Non sei autorizzato ad eseguire questa operazione');
        }
        return view('course.edit', compact('course'));

    }

    public function update(CourseeditRequest $request, Course $course)
    {

        $course->update([
            'name' => $request->name,
            'description' =>$request->description,
            'stylist' =>$request->stylist,
            'level' =>$request->level,
            'price' =>$request->price,
            'startdate' =>$request->startdate,
            'certificate' =>$request->certificate,
            
        ]);

        if($request->coverimg){
            $course->update([
                'coverimg' => $request->file('coverimg')->store('public/covers'),
            ]);
        }

        return redirect(route('course.index'))->with('courseUpdated', 'Hai aggiornato correttamente il corso');

    }

    public function destroy(Course $course) {
        $course->delete();

        return redirect(route('course.index'))->with('courseDeleted', 'Hai eliminato correttamente la console');
    }
}
