<?php

use App\Livewire\Collections\CollectionIndex;
use App\Livewire\Collections\CollectionShow;
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

// Route::get('/collections', function () {
//     return view('collections');
// });

Route::get('/products', function () {
    return view('products');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

// Collections
Route::get('/collections',CollectionIndex::class);
Route::get('/collections/{slug}',CollectionShow::class)->name('collections.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
