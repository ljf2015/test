<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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
Route::get('index/{id}',function($id){
    return 'hellow index-laravel'.$id;
});
Route::get('taskindex',[TaskController::class,'index'])->name('tk');
Route::get('task/{id}',[TaskController::class,'store'])->where('id', '[0-9]+');
Route::view('task','task',['name'=>'Laravel2020']);