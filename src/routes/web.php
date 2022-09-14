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

	$backup_name = date('Y-m-d H:i:s');

    $zip = \Zip::create($backup_name.'.zip', [
    	storage_path('app/public/uploads/Dd/CV/5q/SJ/NT/AW/wJ/2L/uS/aT/mQ/a5/Ve/zf/mp/45/c3/a0/zq/In/1662638327.jpg')
    ]);

    $zip->saveTo(storage_path('app/public/backups'));

    dd('success');
});