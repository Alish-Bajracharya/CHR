<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Notifications\ContactSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $data = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'comments' => 'required|string',
    ]);

    $contact = Contact::create($data);

    // Notify the admin (or any other user)
    $admin = User::where('email', 'admin@gmail.com')->first();
    if ($admin) {
        $admin->notify(new ContactSubmitted($contact));
    }

    // Manually add a dummy notification (for testing purposes)
    $admin->notify(new ContactSubmitted($contact));

    return back()->with('success', 'Your message has been sent successfully!');
}
}
