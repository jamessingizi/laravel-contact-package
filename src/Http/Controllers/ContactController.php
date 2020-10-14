<?php

namespace JamesSingizi\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use JamesSingizi\Contact\Mail\ContactMailable;
use JamesSingizi\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request): RedirectResponse{

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to(config('contact.send_email_to'))->queue(new ContactMailable($request->message, $request->name,$request->email));

        Contact::create($validatedData);

        return back()->with(['contact_saved'=>' contact saved successfully']);
    }
}
