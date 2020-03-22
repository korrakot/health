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
use ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Category;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

//healthelder
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

//tracking
Route::get('/tracking/observe', function () {
    return view('tracking.observe');
});

Route::get('/tracking/record', function () {
    return view('tracking.record');
});

Route::get('/tracking/status', function () {
    return view('tracking.status');
});

//system info
Route::resource('elder', 'PeopleController');
Route::get('/search', 'PeopleController@search');

Route::resource('disease', 'DiseaseController');
Route::get('/searchdisease', 'DiseaseController@search');

Route::resource('patent', 'PatentsController');
Route::get('/searchpatent', 'PatentsController@search');

Route::resource('symptom', 'SymptomController');
Route::get('/searchsymptom', 'SymptomController@search');

Route::resource('medicine', 'MedicineController');
Route::get('/searchmedicine', 'MedicineController@search');
