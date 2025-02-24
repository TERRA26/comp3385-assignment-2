<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback-form');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
            ->send(new Feedback(
                $validated['fullname'],
                $validated['email'],
                $validated['comment']
            ));

        return redirect('/feedback/success');
    }

    public function success()
    {
        return view('feedback-success');
    }
}
