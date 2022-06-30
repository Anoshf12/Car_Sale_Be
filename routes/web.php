<?php

use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

Route::get('/contact', function() {
    Mail::to('test@email.com')->send(new TestMail());
});
