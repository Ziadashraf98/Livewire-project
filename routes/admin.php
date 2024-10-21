<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/

Route::prefix('/admin')->name('admin.')->group(function(){
    
    Route::group(['middleware'=>'checkAdmin'], function(){
        // ================================================== INDEX PAGE
        Route::view('' , 'admin.index')->name('index');
       
        // ================================================== SETTINGS PAGE
        Route::view('settings' , 'admin.settings.index')->name('settings');
        
        // ================================================== SKILLS PAGE
        Route::view('skills' , 'admin.skills.index')->name('skills');
        
        // ================================================== SUBSCRIBERS PAGE
        Route::view('subscribers' , 'admin.subscribers.index')->name('subscribers');
        
        // ================================================== COUNTERS PAGE
        Route::view('counters' , 'admin.counters.index')->name('counters');
        
        // ================================================== SERVICES PAGE
        Route::view('services' , 'admin.services.index')->name('services');
        
        // ================================================== MESSAGES PAGE
        Route::view('messages' , 'admin.messages.index')->name('messages');
        
        // ================================================== CATEGORIES PAGE
        Route::view('categories' , 'admin.categories.index')->name('categories');
        
        // ================================================== PROJECTS PAGE
        Route::view('projects' , 'admin.projects.index')->name('projects');
    });
    
    // ================================================== LOGIN PAGE
    Route::view('/login' , 'admin.auth.login')->name('login')->middleware('guest:admin');
    
    Route::controller(AuthController::class)->group(function() {
        Route::get('logout' , 'logout')->name('logout');
    });
});
