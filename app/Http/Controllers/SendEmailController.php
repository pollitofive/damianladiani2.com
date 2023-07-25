<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $headers = 'From: ' . request()->name . ' - ' . request()->email  . "\r\n";

        mail('damianladiani@gmail.com','Message from contact form',request()->message, $headers);
        return back()->with('success',trans('contact.message-sent'));
    }
}
