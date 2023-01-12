<?php

use App\Models\Post;
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
    $dates = Post::query()
        ->selectRaw('title, DATE(created_at) as date')
        ->withCount('likes')
        ->orderBy('likes_count', 'desc')
        ->orderBy('date', 'desc')
        ->get()
        ->groupBy('date');
    return view('welcome', compact('dates'));
});
