<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('user.contactus', [
            "title" => "Contact Us"
        ]);
    }

    public function sendEmail(Request $request) {
        $details = [
            'phone' => $request->phone,
            'msg' => $request->msg
        ];

        Mail::to('kelompokpsw@gmail.com')->send(new ContactMail($details));
        return back()->with('success', 'Your message has been successfully!');
    }
}
