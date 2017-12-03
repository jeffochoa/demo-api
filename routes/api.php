<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('post', function () {
    return response()->json([
        [
            "id" => 1,
            "title" => "foo title",
            "body" => "bar body",
            "author" => 1
        ]
    ]);
});

Route::get('author', function () {
    return response()->json([
        [
            "id" => 1,
            "name" => "jhon",
            "email" => "jhon@mail.com"
        ]
    ]);
});
