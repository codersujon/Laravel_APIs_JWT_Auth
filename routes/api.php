<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CourseController;

/**
 * User APIs Routes
 */
Route::prefix('user') 
    ->name('user.')
    ->controller(UserController::class)
    ->group(function(){

    // Public Routes
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');

    // Protected Routes
    Route::middleware('auth:api')->group(function(){
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/refresh/token', 'refreshToken')->name('refresh.token');
        Route::post('/logout', 'logout')->name('logout');
    });
});


/**
 * Course APIs Routes
 */
Route::prefix('course')
    ->name('course.')
    ->controller(CourseController::class)
    ->group(function(){
    
    // Protected Routes
    Route::middleware('auth:api')->group(function(){
        Route::post('/enroll', 'courseEntroll')->name('enroll');
        Route::get('/list', 'listCourses')->name('list');
        Route::delete('/delete', 'deleteCourse')->name('delete');
    }); 
});