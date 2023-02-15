<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SentenceController;
use App\Http\Controllers\UserTableController;
use App\Models\Customer;
use App\Models\Sentence;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello/{name}', function ($name) {
    return "hello ".$name;
});
Route::get('users',[LoginController::class,'index']);
Route::get('flights/{name}',[FlightController::class,'store']);
Route::get('getFlights',[FlightController::class,'show']);

Route::get('getPhones',[UserTableController::class,'show']);   
Route::get('getPosts',[PostController::class,'show']); 
// Route::get('read',[SentenceController::class,'csvToArray']);
Route::get('form',function(){
    return view('csv');
});
Route::get('insert',[SentenceController::class,'index']);
Route::get('get',[CustomerController::class,'show']);  