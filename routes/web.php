<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contact;

Route::get('/', function () {
    return redirect('/admin');
});
