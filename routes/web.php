<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookStatusController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class, 'home'])->name('pages.home');
Route::get('/library', [PagesController::class, 'library'])->name('pages.library');
Route::get('/games', [PagesController::class, 'games'])->name('pages.games');
Route::get('/library/{book_slug}', [PagesController::class, 'library_show'])->name('pages.book_show');
// Route::get('/categories', [CategoryController::class, 'category_books']);
Route::get('/forum', [PagesController::class, 'forum'])->name('pages.forum');
Route::get('/quiz/farm', [PagesController::class, 'quiz_farm'])->name('pages.quiz_farm');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/friends', [FriendshipController::class, 'friends'])->name('profile.friends');
    Route::post('/friend/add/{id}', [FriendshipController::class, 'addFriend'])->name('friend.add');
    Route::post('/friend/accept/{friendId}', [FriendshipController::class, 'acceptFriend'])->name('friend.accept');
    Route::get('/chat', [ChatController::class, 'allChats'])->name('friend.chat');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // post status
    Route::post('/books/{book}/favorite', [BookStatusController::class, 'addToFavorite'])->name('books.favorite');
    Route::post('/books/{book}/read', [BookStatusController::class, 'addToRead'])->name('books.read');
    Route::post('/books/{book}/reading', [BookStatusController::class, 'addToReading'])->name('books.reading');
    Route::post('/books/{book}/postponed', [BookStatusController::class, 'addToPostponed'])->name('books.postponed');
    // post status END
});

require __DIR__.'/auth.php';
