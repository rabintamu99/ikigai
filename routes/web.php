<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/dashboard', function () {
//     return view('dashboard',['posts' => Post::orderBy('created_at', 'desc')->get()]);
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    $users = User::all(); // Get the authenticated user
    $posts = Post::orderBy('created_at', 'desc')->get();
    
    return view('dashboard', [
        'users' => $users,
        'posts' => $posts,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard',['users' => User::All()]);
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/message', function () {
    return view('message');
})->middleware(['auth', 'verified'])->name('message');

Route::get('/circle', function () {
    return view('circle');
})->middleware(['auth', 'verified'])->name('circle');

Route::get('/journal', function () {
    return view('journal/journal');
})->middleware(['auth', 'verified'])->name('journal');

Route::get('/circle/home', function () {
    return view('circle/land-circle');
})->middleware(['auth', 'verified'])->name('circle');

// Route::get('/feed', function () {
//     return view('post.feed');
// })->middleware(['auth', 'verified'])->name('feed');

// Route::get('/feed', function () {
//     return view('post.feed',['posts' => Post::all()]);
// })->middleware(['auth', 'verified'])->name('feed');

// Route::get('/feed', function () {
//     return view('post.feed',['posts' => Post::orderBy('created_at', 'desc')->get()]);
// })->middleware(['auth', 'verified'])->name('feed');

Route::get('/feed', [PostController::class, 'index'])->name('feed');

Route::get('/users.index', [ProfileController::class, 'index'])->name('users');

Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/avatar', [ProfileController::class, 'upload'])->name('profile.upload');
   
   
});

Route::post('/post/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/like-post/{id}',[PostController::class,'likePost'])->name('like.post');
Route::post('/unlike-post/{id}',[PostController::class,'unlikePost'])->name('unlike.post');

require __DIR__.'/auth.php';
