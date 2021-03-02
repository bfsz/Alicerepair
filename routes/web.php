<?php

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

/*公告详情*/
Route::get('/notice/{id}/view', function ($id) {
    $notice_data = \App\Models\Manager\BxNotice::where('id', $id)->get();
    return view('admin.notice', ['data' => $notice_data]);
});

