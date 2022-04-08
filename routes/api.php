<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api route butuh authorization
// web route butuh authentication

// header --Authorization: Bearer <token>

// web app
// login page (server:frontend) -> fill form (server:frontend) -> authentication (server:backend) -> create session server:backend -> redirect to home page (server:frontend)

// mobile app using api
// login page (frontend-mobile/independent web app)-> fill form (frontend) -> authentication (server:backend-php,node,golang) -> get token (mobile-have ttl - time to live) -> save token to local storage (mobile) -> redirect to home page (mobile)
