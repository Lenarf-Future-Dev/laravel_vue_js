<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ApplicationController;

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

route::get('/api/users',[UserController::class,'index']);

route::post('/api/users',[UserController::class,'store']);

route::put('/api/users/{user}',[UserController::class,'update']);

route::get('{view}',ApplicationController::class)->where('view','(.*)');
