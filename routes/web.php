<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::get('pages',[PagesController::class, 'index'])
    ->name('pages.index');

Route::get('/pages/{id}',[PagesController::class, 'show'])
    ->name('pages.show');
Route::resource('/posts',\App\Http\Controllers\PostController::class);
//Route::get('/hello',function () {
//    return route('admin.page', ['id' => 1234]);
//}
//);
//
//Route::get('/hello/id',function () {
//    return 'Hello ID';
//}
//);
//
//Route::get('/admin/page/{id?}',function ($id='default') {
//    return 'This is Page: ' . $id;
//}
//)->name('admin.page');
//
//Route::get('/staft/news/{id?}',function ($id=null) {
//    return 'This is News: ' . $id;
//}
//)->name('staft.news');
//
//Route::get('/pages', [PagesController::class, 'index']);
//Route::get('/pages/{id}', [PagesController::class, 'show']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
