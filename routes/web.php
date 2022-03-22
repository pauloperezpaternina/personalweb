<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});

// Send email
Route::post('messages', function (){
    $data = request()->all();
    Mail::send("emails.message", $data, function($message) use ($data){
        $message->from($data['email'], $data['name'])
        ->to('pjpptecnotux@gmail.com', 'Paulo')
        ->subject('Contact Personal Web '.$data['name']);
    });
    return back()->with('flash', $data['name'].', tu mensaje se ha enviado.');
    //return var_dump(request()->all());
})->name('messages');
