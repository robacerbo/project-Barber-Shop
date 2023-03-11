<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactEmail;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        $courses = Course::orderBy('created_at', 'DESC')->take(3)->get();
        return view('welcome', compact('courses'));
    }

    public function contact_us() {
        return view('contact_us');
    }

    public function contact_us_submit(ContactRequest $request) { // dependency injection + Type Hinting
       
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        
        Mail::to($email)->send(new ContactEmail());
        
        return redirect(route('contact_us_successful'));

    }

    public function contact_us_successful() {
        return view('contact_us_successful');
    }
}
