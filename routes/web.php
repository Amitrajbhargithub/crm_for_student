<?php

use App\Http\Controllers\Student\LoginController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Student\ProfileController;
use App\Http\Controllers\Admin\ExcelController;
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

Route::get('/',[LoginController::class,'studentLogin'])->name('student-login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('student-login',[LoginController::class,'doAuthentication'])->name('student-login');
Route::get('student/dashboard',[ProfileController::class,'studentDashboard'])->name('student/dashboard');
Route::get('student/test-series',[ProfileController::class,'studentTestSeries'])->name('student/test-series');
Route::get('student/start-test-series/{id}',[ProfileController::class,'startStudentTestSeries'])->name('student/start-test-series');
Route::post('update-student-profile',[ProfileController::class,'updateStudentProfile'])->name('update-student-profile');

#######################################################
Route::get('/admin-login',[AdminLoginController::class,'adminLogin'])->name('admin-login');
Route::post('admin-login',[AdminLoginController::class,'adminAuthentication'])->name('admin-login');
Route::get('admin/dashboard',[AdminLoginController::class,'adminDashboard'])->name('admin/dashboard');
Route::get('admin/student-list',[AdminLoginController::class,'studentList'])->name('admin/student-list');
Route::get('admin/add-student',[AdminLoginController::class,'adminAddStudent'])->name('admin/add-student');
Route::post('admin/save-student',[AdminLoginController::class,'adminSaveAddStudent'])->name('admin/save-student');
Route::get('admin/edit-student/{id}', [AdminLoginController::class, 'editStudent'])->name('admin/edit-student');
Route::post('admin/update-student-data', [AdminLoginController::class, 'updateStudentData'])->name('admin/update-student-data');
########################################################
Route::get('admin/add-test',[ExcelController::class,'addTest'])->name('admin/add-test');
Route::get('admin/test-series-list', [ExcelController::class, 'testSeriesList'])->name('admin/test-series-list');
Route::get('admin/delete-test/{id}', [ExcelController::class, 'deleteTestData'])->name('admin/delete-test');
Route::post('/upload-test', [ExcelController::class, 'upload'])->name('upload-test');
Route::post('admin/save-test-series', [ExcelController::class, 'saveTestSeries'])->name('admin/save-test-series');