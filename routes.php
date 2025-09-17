<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;

// Default Laravel route

Route::get('/', function () {

    return view('welcome');

});