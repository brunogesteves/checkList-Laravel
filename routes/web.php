<?php

use App\Models\Event;
use App\Models\Guest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    return view('welcome', [
        "events" => Event::all(),
        "guests" => Guest::all(),

    ]);
});
