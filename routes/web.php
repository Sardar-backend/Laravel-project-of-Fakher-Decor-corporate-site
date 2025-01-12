<?php

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
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
        Route::post('/login',[HomeController::class,'login_post'])->name('login_post');
        Route::post('/contact',[HomeController::class,'contact_post'])->name('contact_post');
        Route::post('/register',[HomeController::class,'register_post'])->name('register_post');
        Route::post('/craete_comment',[HomeController::class,'craete_comment'])->name('craete_comment');
        Route::post('/newsletter',[HomeController::class,'newsletter'])->name('newsletter_post');
        Route::get('/download',[HomeController::class,'download_post'])->name('download_post');
    }
    )->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']);




Route::get('login/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('login/google/callback', function () {
    $user = Socialite::driver('google')->user();
    $existingUser = User::where('email', $user->getEmail())->first();

    if ($existingUser) {
        auth()->login($existingUser, true);
    } else {
        $newUser = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt(str_random(16)),
        ]);
        auth()->login($newUser, true);
    }

    return redirect()->route('home');
});


Route::get('login/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('login/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();
    $existingUser = User::where('email', $user->getEmail())->first();

    if ($existingUser) {
        auth()->login($existingUser, true);
    } else {
        $newUser = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt(str_random(16)),
        ]);
        auth()->login($newUser, true);
    }
});


Route::get('login/linkedin', function () {
    return Socialite::driver('linkedin')->redirect();
});

Route::get('login/linkedin/callback', function () {
    $user = Socialite::driver('linkedin')->user();
    $existingUser = User::where('email', $user->getEmail())->first();

    if ($existingUser) {
        auth()->login($existingUser, true);
    } else {
        $newUser = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt(str_random(16)),
        ]);
        auth()->login($newUser, true);
    }
});


Route::get('login/x', function () {
    return Socialite::driver('twitter')->redirect();
});

Route::get('login/x/callback', function () {
    $user = Socialite::driver('twitter')->user();
    $existingUser = User::where('email', $user->getEmail())->first();

    if ($existingUser) {
        auth()->login($existingUser, true);
    } else {
        $newUser = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt(str_random(16)),
        ]);
        auth()->login($newUser, true);
    }
});
