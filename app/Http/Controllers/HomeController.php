<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index()
    {
        return view('mail.form');
    }

    public function sendEmail(Request $request)
    {

        $request->validate([
            'to' => 'required | email',
            'subject' => 'required',
            'body'=>'required'
        ]);
        
        $data = [
            'to' => $request->to,
            'subject' => $request->subject,
            'body' => $request->body
        ];

        Mail::to($data['to'])->send(new DemoMail($data));
        return redirect('index')->with('success',"Email has been sent! Check it");
    }

    public function sendNotification()
    {
        $user = User::first();
        Notification::send($user, new WelcomeNotification);
        dd('Notification Sent!');
    }
}
