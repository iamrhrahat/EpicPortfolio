<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Database\QueryException;
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


    // Flash the notification message to the session
        return redirect()->back()->with('notification', 'Contact form submitted successfully!');


    }
    public function myNewsLetter(Request $request)
{
    try {
        $validateNewsletter = $request->validate([
            'email' => 'required|email|max:150|unique:newsletter_subscriptions,email',
        ]);

        $newsletter = NewsletterSubscription::create($validateNewsletter);

        return redirect()->back()->with('notification', 'Email submitted successfully!');
    } catch (QueryException $e) {
        // Check if it's a unique constraint violation
        if ($e->getCode() == 23000) {
            throw ValidationException::withMessages([
                'email' => ['This email is already subscribed to the newsletter.'],
            ]);
        }

        // Handle other exceptions or rethrow if needed
        throw $e;
    }
}

}
