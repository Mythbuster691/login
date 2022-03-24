<?php

use App\Http\Controllers\cpcontroller;
use App\Http\Controllers\dataviewcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::prefix('admin')->as('admin.')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get('/users',function(){
        return view('admin.rusers');
    })->name('rusers');
    Route::get('/projects',function(){
        return view('admin.projects');
    })->name('projects');
});

Route::prefix('user')->as('user.')->middleware(['auth', 'isUser'])->group(function () {
    Route::get('/', function () {
        return view('frontend.user.dashboard');
    });
    Route::get('/createproject',function(){
        return view('frontend.createproject');
    });
    Route::post('/createproject',[cpcontroller::class,'createproject']);

});



require __DIR__ . '/auth.php';
