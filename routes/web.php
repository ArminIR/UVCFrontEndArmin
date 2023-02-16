<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticlesController;
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

Route::get('/posts/{post}',  function($post){
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [WelcomeController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

//Route::get('/faq', [FaqController::class, 'index']);
//Route::post('/faq', [FaqController::class, 'store']);
//Route::get('/faq/create', [FaqController::class, 'create']);
//Route::get('/faq/{faq}', [FaqController::class, 'show']);
//Route::get('/faq/{faq}/edit', [FaqController::class, 'edit']);
//Route::put('/faq/{faq}', [FaqController::class, 'update']);
//Route::delete('/faq/{faq}', [FaqController::class, 'destroy']);

//Route::get('/blog', [BlogController::class, 'show']);

Route::get('/posts/{post}', [PostController::class, 'show']);

//Route::post('/blog', [ArticlesController::class, 'store']);
//Route::get('/blog/create', [ArticlesController::class, 'create']);
//Route::get('/blog/{article}', [ArticlesController::class, 'show']);
//Route::get('/blog/{article}/edit', [ArticlesController::class, 'edit']);
//Route::put('/blog/{article}', [ArticlesController::class, 'update']);
//Route::delete('/blog/{article}', [ArticlesController::class, 'destroy']);

Route::resources([
    'faq' => FaqController::class,
    'blog' => ArticlesController::class,
]);

