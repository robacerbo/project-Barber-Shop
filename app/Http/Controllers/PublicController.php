<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

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

    public function profile(){
        //PRIMO METODO: SFUTTARE RELAZIONE
        // return view('profile');



        // FLUENT INTERFACE + METHOD CHAINING
        //SECONDO METODO: SFRUTTARE UNA QUERY AL DATABASE
        $courses = Course::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        //$query (c'è ma è nascosta) --> where --> orderBy --> get
        //tutti i record--> recupera solo quelli dell'utente loggato--> ordinameli --> crea collezione
        return view('profile', compact('courses'));
    }
}
