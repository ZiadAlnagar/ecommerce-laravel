<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;

require __DIR__ . '/auth.php';

Route::domain('{sub}.localhost')->middleware('can:moderator')->group(function () {
    Route::get('/', function ($sub) {
        // return view('admin.index');
    });
});

Route::middleware('can:moderator')->group(function () {
});

Route::get('/', function () {
    return view('index');
})->name('home');

Route::resource('products', ItemController::class, ['names' => 'item']);

Route::get('/dashboard', function () {
    return view('moderator.dashboard');
})->name('dashboard');

Route::resource('brand', BrandController::class)->except('create', 'show', 'edit');

Route::resource('category', CategoryController::class)->except('create', 'show', 'edit');

// Route::get('/test/{token}', function () {
//     dd(request()->token);
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// protected function average($method, $average, $size, $value)
// {
//     if ($method == 'add') {
//         return ($size * $average + $value) / ($size + 1);
//     } elseif ($method == 'remove') {
//         if ($size == 1) return 0;
//         return ($size * $average - $value) / ($size - 1);
//     } else {
//     }
// }
