<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [MemberController::class,'show']);
Route::get('/member', 'MemberController@exportCsv');
Route::get('/main', [MainController::class, 'index'])->name('index');
Route::get('/getStates/{id}', [MainController::class, 'getStates'])->name('getStates');
Route::get('/send-email', [\App\Http\Controllers\MailController::class, 'sendEmail']);
