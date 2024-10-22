<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;


Route::localized(function () {
  Route::get('/search', [SearchController::class, 'index'])->name('search');

  Route::get('/', [PageController::class, 'home'])->name('home');
  Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');
  Route::get('/blog/{slug}', [PageController::class, 'blog'])->name('blog');
  Route::get('/author/{slug}', [PageController::class, 'author'])->name('author');
  Route::get('/tags/{slug}', [PageController::class, 'tag'])->name('tag');
  Route::get('/categories/{slug}', [PageController::class, 'category'])->name('category');
  Route::get('/about-us', [PageController::class, 'about'])->name('about');
  Route::post('/contact', [PageController::class, 'contactPost'])->name('contact.post');
  Route::get('/gallery', [PageController::class, 'galery'])->name('galery');
  Route::get('/contact', [PageController::class, 'contact'])->name('contact');
  Route::get('/faq', [PageController::class, 'faq'])->name('faq');
});
Route::get('/mail',function (){
  return view('mail');
});
