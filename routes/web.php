<?php

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

// Route::get('/user', [UserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home/', function () {
//     Route::get('/home/', [homeController::class, 'home']);
// });

use App\Http\Controllers\homeController;
use App\Http\Controllers\topicsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\adminController;

Route::get('/home', [homeController::class, 'show'])->name('index');
Route::get('/array', [homeController::class, 'array']);
Route::get('/topics', [topicsController::class, 'index']);
Route::get('/topics/new', [topicsController::class, 'create_topic']);
Route::post('/topics/create', [topicsController::class, 'create']);
Route::get('/about', function () { return 'This is the About page.';});
Route::get('/usery/{id}', function ($id) { return "User ID: " . $id;});
Route::get('/profile', function () { return 'This is the About page.';})->name('profile');
// Route::get('/posts', 'homeController@show');
// Route::resource('posts', 'TestController');
Route::resource('posts', TestController::class);
Route::get('/page', [homeController::class, 'page']);
Route::get('/master', [homeController::class, 'master']);
Route::get('/vars', [homeController::class, 'vars']);
Route::get('/get-topics', [homeController::class, 'get_topics']);
Route::get('/shop', [homeController::class, 'categores']);

Route::get('/shop', [homeController::class, 'eeeeeeeeeeeee']);
Route::get('/form', [homeController::class, 'get_form']);
Route::post('/form', [homeController::class, 'put_form']);

//практическое задание
Route::get('/admin', [adminController::class, 'log_admin']);


