<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Mcamara\LaravelLocalization\Middleware\localizationRedisrect;
use Mcamara\LaravelLocalization\Middleware\localeViewPath;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
    ],
    function () {



        Route::get('/services',[HomeController::class,'Services'])->name('services');
        Route::get('/contact',[HomeController::class,'contact'])->name('contact');
        Route::get('/blog',[HomeController::class,'blog_list'])->name('blogs');
        Route::get('/',[HomeController::class,'index'])->name('index');
        Route::get('/faq',[HomeController::class,'faq'])->name('faq');
        Route::get('/projects',[HomeController::class,'projects'])->name('projects');
        Route::get('/blog-single{id}',[HomeController::class,'blog_single'])->name('blog_single');
        Route::get('/project-single{id}',[HomeController::class,'project_single'])->name('project_single');
        Route::get('/about',[HomeController::class,'about'])->name('about');

        Route::get('/login',[HomeController::class,'login'])->name('login');

        Route::get('/register',[HomeController::class,'register'])->name('register');
    }
    )->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']);


Route::post('/login',[HomeController::class,'login_post'])->name('login_post');
Route::post('/contact',[HomeController::class,'contact_post'])->name('contact_post');
Route::post('/register',[HomeController::class,'register_post'])->name('register_post');
Route::post('/craete_comment',[HomeController::class,'craete_comment'])->name('craete_comment');
Route::post('/newsletter',[HomeController::class,'newsletter'])->name('newsletter_post');
Route::get('/download',[HomeController::class,'download_post'])->name('download_post');
