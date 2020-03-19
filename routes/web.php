<?php

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
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/healthelder/record', function () {
    return view('healthelder.health_record');
});

Route::get('/healthelder/diseaserecord', function () {
    return view('healthelder.disease_record');
});

Route::get('/healthelder/rightsrecord', function () {
    return view('healthelder.rights_record');
});

Route::get('/healthelder/medicinerecord', function () {
    return view('healthelder.medicine_record');
});