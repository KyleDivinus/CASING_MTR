<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('jobs', JobController::class);

Route::resource('companies', CompanyController::class);

Route::resource('candidates', CandidateController::class);


Route::resource('applications', ApplicationController::class);
