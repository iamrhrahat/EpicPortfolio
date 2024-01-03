<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Validation\ValidationException;
use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function myContact (Request $request){
        $validateContact = $request->validate([
            'name' => 'required | string | max: 255',
            'email' => 'required | email| max: 255',
            'message' => 'required '
        ]);

        $contact = Contact::create($validateContact);

        // Flash a success message to the session
        Session::flash('success', 'Contact form submitted successfully!');
        return redirect()->back();


    }
    public function myNewsLetter(Request $request){
        $validateNewsletter = $request->validate([
            'email' => 'required|email|max:150'
        ]);

        $newsletter = NewsletterSubscription::create($validateNewsletter);
        return redirect()->back()->with('success', 'Subscription successful!');
    }
}
