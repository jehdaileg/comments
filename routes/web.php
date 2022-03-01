<?php

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use App\Events\TestBroadCast;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentController;

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

/* Just for Test */

$user = User::query()->firstOrCreate([
    'email' => 'example@gmail.com',
    'password' => '12345678',
    'name' => 'nameExample'
]);

Auth::login($user, remember:true);



Route::get('/', function(){
    return Inertia::render('Home');
})->name('home');

Route::resource('/posts', PostController::class);

Route::post('postComment/{post}', [PostCommentController::class, 'store'])->name('post.comment');
