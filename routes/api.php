<?php
use App\Models\Download;
use App\Models\Batch;
use App\Models\Image;
use App\Models\Citie;
Use App\Models\Photographer;
Use App\Models\User;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\BatchsController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\PhotographersController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

#Route::get('/products', [ProductController::class, 'index']);
#Route::get('/products/{id}', [ProductController::class, 'show']);
#Route::get('/products/search/{name}', [ProductController::class, 'search']);
#Route::post('/products', [ProductController::class, 'store']);
#Route::put('/products/{id}', [ProductController::class, 'update']);
#Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/lotes', [BatchsController::class, 'lotes']);
Route::get('/downloads', [DownloadsController::class, 'downloads']);
Route::get('/images', [ImagesController::class, 'images']);
Route::get('/cities', [CitiesController::class, 'cities']);
Route::get('/photographers', [PhotographersController::class, 'photographers']);
Route::get('/user', [UsersController::class, 'users']);

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
