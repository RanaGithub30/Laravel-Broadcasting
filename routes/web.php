<?php

use Illuminate\Support\Facades\Route;
use App\Events\MessageNotification;

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

///////////// (https://www.youtube.com/watch?v=UwB5z6u7vt8)

Route::get('/event', function(){
    event(new MessageNotification('Sending Message Using Broadcasting'));
});

Route::get('/listen', function(){
    return view('listen');
});