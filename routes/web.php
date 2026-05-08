<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Send the email
    \Illuminate\Support\Facades\Mail::raw("Name: {$request->name}\nEmail: {$request->email}\n\nMessage:\n{$request->message}", function ($mail) use ($request) {
        $mail->to('oshensathsara2003@gmail.com');
        $mail->replyTo($request->email, $request->name);
        $mail->subject('New Portfolio Contact: ' . $request->name);
    });

    return redirect('/#contact')->with('success', 'Thank you! Your message has been sent successfully.');
})->name('contact.submit');
