<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
 * get() = http get http://example.com/api
 * post() = membuat data baru
 * put() = mengubah data baru keseluruhan
 * patch() = mengubah data baru hanya sebagian
 * delete() = menghapus data
 * any() = optional HTTP method
 */

/**
 * BASE URL = http://localhost:8000/api
 */

/**
 * GET
 * http://localhost:8000/api/coba
 */

// Route::get('/coba', function () {
//     $limit = request()->limit;
//     return $limit;
// });

Route::get('/coba', [CobaController::class, 'index']);



/**
 * GET {dynamic route}
 * http://localhost:8000/api/coba/{id}
 */

// Route::get('/coba/{id}', function ($id) {
//     return $id;
// });

Route::get('/coba/{id}', [CobaController::class, 'detail']);



/**
 * POST
 * http://localhost:8000/api/coba
 */

// Route::post('/coba', function () {
//     $coba = request()->coba; // hanya 1 data yang di ambil
//     $only = request()->only(['coba', 'test']); // hanya yang ditentukan saja
//     $all = request()->all(); // semua request body dari client didapatkan
//     return $all;
// });

Route::post('/coba', [CobaController::class, 'create']);


/**
 * PUT
 * http://localhost:8000/api/coba
 */

Route::put('/coba', function () {
    $coba = request()->coba; // hanya 1 data yang di ambil
    $only = request()->only(['coba', 'test']); // hanya yang ditentukan saja
    $all = request()->all(); // semua request body dari client didapatkan
    return $all;
});

/**
 * PUT
 * http://localhost:8000/api/coba
 */

Route::put('/coba', function () {
    $coba = request()->coba; // hanya 1 data yang di ambil
    $only = request()->only(['coba', 'test']); // hanya yang ditentukan saja
    $all = request()->all(); // semua request body dari client didapatkan
    return $all;
});

/**
 * PATCH
 * http://localhost:8000/api/coba
 */

Route::patch('/coba', function () {
    $coba = request()->coba; // hanya 1 data yang di ambil
    $only = request()->only(['coba', 'test']); // hanya yang ditentukan saja
    $all = request()->all(); // semua request body dari client didapatkan
    return $all;
});


/**
 * DELETE 
 * http://localhost:8000/api/coba/{id}
 */

Route::delete('/coba/{id}', function ($id) {
    return $id;
});






// post api list
Route::get('/posts', [PostController::class, 'index']); // api get list post
Route::get('/posts/{id}', [PostController::class, 'detail']); // api get detail post
Route::post('/posts', [PostController::class, 'create']); // api create post
Route::put('/posts/{id}', [PostController::class, 'update']); // api update post
Route::delete('/posts/{id}', [PostController::class, 'destroy']); // api delete post