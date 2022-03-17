<?php

use App\Models\Group;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Models\User;
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

Route::get('/', function () {
    // Take the 3 newest posts
    $latestPosts = Post::orderBy('published_at', 'desc')->take(3)->get();
    $userCount = User::count();
    $groupCount = Group::count();

    return view('welcome', compact('latestPosts', 'groupCount', 'userCount'));
})->name('home');

Route::get('/groups', function() {
    $groups = Group::orderby('semester')->orderby('name')->get();

    return view('groups.index', compact('groups'));
})->name('groups.index');

// Resource routes of the base pages. For more info on Resource Routes
Route::resource('/posts', PostController::class);
