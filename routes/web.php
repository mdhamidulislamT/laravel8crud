<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\HomeController;





Route::get('/', [HomeController::class, 'index']);

// https://www.codecheef.org/article/laravel-7x-custom-login-and-registration-example

// Route::namespace('Auth')->group(function () {
// });

    Route::get('/login', [LoginController::class, 'show_login_form'])->name('login');
    Route::post('/login', [LoginController::class, 'process_login'])->name('login');
    Route::get('/register', [LoginController::class, 'show_signup_form'])->name('register');
    Route::post('/register', [LoginController::class, 'process_signup'])->name('register');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::view('admin/dashboard', 'admin.home');
    Route::view('user/dashboard', 'user.home');

Route::group(['middleware'=>'admin'], function(){
        //--Admin can do--//
    Route::view('admin/createNewAdminForm', 'admin.createNewAdmin');
    Route::view('admin/addCourseForm', 'admin.addCourse');
    Route::post('/addNewCourse', [CourseController::class, 'storeNewCourse'])->name('addNewCourse');
    Route::get('admin/courseList', [CourseController::class, 'getcourseList'])->name('admin.courselist');
   
    });
    



// Route::view('showlogin', 'login');
// Route::post('Login', [UserController::class, 'login']);
// Route::view('admin/dashboard', 'admin.home');



//----for laravelCRUD
// Route::view('adduser', 'adduser');
// Route::post('adduser', [UserController::class, 'store']);

// Route::get('userlist', [UserController::class, 'getUserList']);

// Route::get('edit/{id}', [UserController::class, 'getData']);

// Route::post('edit', [UserController::class, 'update']);

// Route::get('show/{id}', [UserController::class, 'show']);

// Route::get('delete/{id}', [UserController::class, 'delete']);







