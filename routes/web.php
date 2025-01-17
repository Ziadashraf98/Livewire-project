<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('/')->name('front.')->group(function(){
    
    // ================================================== INDEX PAGE
    Route::view('' , 'front.index')->name('index');
    
    // ================================================== ABOUT PAGE
    Route::view('about' , 'front.about')->name('about');
    
    // ================================================== CONTACT PAGE
    Route::view('contact' , 'front.contact')->name('contact');
    
    // ================================================== PROJECTs PAGE
    Route::view('projects' , 'front.projects')->name('projects');
    
    // ================================================== SERVICES PAGE
    Route::view('services' , 'front.services')->name('services');
    
    // ================================================== TEAM PAGE
    Route::view('team' , 'front.team')->name('team');
    
    // ================================================== TESTMONIALS PAGE
    Route::view('testmonials' , 'front.testmonials')->name('testmonials');
});
