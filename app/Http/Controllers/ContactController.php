<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {

        $validated = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        Log::info('Contact Form Submitted', $validated);

        return view('pages.contact-success')->with('data', $contact);

    }

    public function success()
    {

        $data = session('data');
        return view('pages.contact-success', compact('data'));
    }

}
