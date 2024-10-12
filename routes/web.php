<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/services',[HomeController::class,'Services'])->name('services');
Route::get('/projects',[HomeController::class,'projects'])->name('projects');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::get('/blog',[HomeController::class,'blog_list'])->name('blogs');
Route::get('/blog-single{id}',[HomeController::class,'blog_single'])->name('blog_single');
Route::get('/project-single{id}',[HomeController::class,'project_single'])->name('project_single');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact',[HomeController::class,'contact_post'])->name('contact_post');
