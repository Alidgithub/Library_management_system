<?php

use App\Http\Controllers\AddBooksController;
use App\Http\Controllers\AddClassController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\dashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Student\BookAssignController;
use App\Http\Controllers\Student\RegisterStudentController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\student\StudentProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Prompts\SearchPrompt;

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


Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, "login"])->name('login');
    Route::post('/adminLogin', [LoginController::class, "adminLogin"])->name('adminLogin');
});



Route::middleware('auth')->group(function () {
    Route::get('class', [AddClassController::class, 'class'])->name('class');

    Route::get('/dashboard', [dashboardController::class, "dashboard"])->name('dashboard');

    Route::get('/logout', [LogoutController::class, "logout"])->name('logout');

    Route::get('/studentInfo', [StudentController::class, "studentInfo"])->name('studentInfo');

    Route::get('/registerStudent', [RegisterStudentController::class, "registerStudent"])->name('registerStudent');

    Route::get('/bookAssign', [BookAssignController::class, "bookAssign"])->name('bookAssign');

    Route::post('/bookAssignToStudent', [BookAssignController::class, "bookAssignToStudent"])->name('bookAssignToStudent');

    Route::post('/addClass', [AddClassController::class, "addClass"])->name('addClass');

    Route::post('addStudent', [RegisterStudentController::class, 'store'])->name('addStudent');

    Route::get('books', [AddBooksController::class, 'books'])->name('books');

    Route::post('storBooks', [AddBooksController::class, 'storBooks'])->name('storBooks');

    Route::post('/student/getinfo', [StudentProfileController::class, 'getinfo'])->name('getinfo');

    Route::get('editStudentProfile/{id}', [StudentProfileController::class, 'studentProfile'])->name('editStudentProfile');

    Route::put('editStudentProfile/{id}', [StudentProfileController::class, 'updateStudentProfile'])->name('updateStudentProfile');

    // Route::get('deleteStudentProfile/{id}', [StudentProfileController::class, 'deleteStudentProfile'])->name('deleteStudentProfile');

    Route::get('/search', [SearchController::class, 'search'])->name('search');

    Route::post('/deleteStudent', [StudentProfileController::class, 'deleteStudentProfile'])->name('search');




});
