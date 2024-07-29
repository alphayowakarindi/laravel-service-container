<?php

use App\Services\Calculator;
use Illuminate\Support\Facades\Route;

// app()->bind(Calculator::class, function () {
//     return new Calculator();
// });

Route::get('/', function (Calculator $calculator) {
    dd($calculator->add(1, 1));
});
