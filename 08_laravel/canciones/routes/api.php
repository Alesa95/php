<?php

use Illuminate\Http\Request;
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

use App\Http\Resources\ArtistaResource;
use App\Models\Artista;
 
Route::get('/artistas', function () {
    return ArtistaResource::collection(Artista::all());
});

Route::get('/artistas/{id}', function (string $id) {
    return new ArtistaResource(Artista::findOrFail($id));
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
