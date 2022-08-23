<?php

use App\Http\Controllers\ProductsController;
use GuzzleHttp\Promise\Create;
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




Route::controller(ProductsController::class)->group(function () {
    Route::get('/', 'getProducts');
    Route::post('/ProductsCreate', 'CreateProducts');
    Route::post('/ProductsUpdate', 'UpdateProducts');
    Route::get('/ProductsDelete/{id}', 'DeleteProducts');
});
