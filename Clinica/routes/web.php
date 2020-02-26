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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sistemadamon', function () {
    return view('sistemadamon');
});
Route::get('/ortodonciainvisible', function () {
    return view('ortodonciainvisible');
});
Route::get('/ortodonciaacelerada', function () {
    return view('ortodonciaacelerada');
});

Route::get('/ortodonciaaedadestempranas', function () {
    return view('ortodonciaaedadestempranas');
});
Route::get('/miniimplantesparaortodoncia', function () {
    return view('miniimplantesparaortodoncia');
});

Route::get('/blanqueamiento', function () {
    return view('blanqueamiento');
});

Route::get('/primeravisita', function () {
    return view('primeravisita');
});

Route::get('/emergencias', function () {
    return view('emergencias');
});
Route::get('/politicasdelconsultorio', function () {
    return view('politicasdelconsultorio');
});
Route::get('/alimentosquehayqueevitar', function () {
    return view('alimentosquehayqueevitar');
});
Route::get('/preguntasfrecuentes', function () {
    return view('preguntasfrecuentes');
});
Route::get('/promociones', function () {
    return view('promociones');
});
Route::get('/casosdeexito', function () {
    return view('casosdeexito');
});
Route::get('/QuenoshaceUnidos', function () {
    return view('QuenoshaceUnidos');
});
Route::get('/quienes', function () {
    return view('quienes');
});
Auth::routes();
Route::get('/enviarcita', 'CitasController@enviar');
Route::get('/telegram/{id}', 'CitasController@telegram');
Route::get('/home', 'HomeController@index')->name('home');
