<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/cp/req-change-subsidize', function () {
    return view('cp.req-change-subsidize.index');
});

Route::get('/examiner/report-certificate-expire', function () {
    return view('examiner.report-certificate-expire.index');
});