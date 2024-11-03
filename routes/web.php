<?php

use App\Jobs\ProcessDataJob;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/run-jobs', function () {
    for ($i = 1; $i <= 5; $i++) {
        ProcessDataJob::dispatch("Data ke-$i");
    }
    return 'Jobs diproses secara paralel';
});
