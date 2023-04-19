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

Route::get('/index', function () {
    return view('index');
});
Route::get('/paginaMenu', function () {
    return view('paginaMenu');
});
Route::get('/niveles', function () {
    return view('niveles');
});
Route::get('/paginaN1', function () {
    return view('paginaN1');
});
Route::get('/paginaN2', function () {
    return view('paginaN2');
});
Route::get('/pagina2N1', function () {
    return view('pagina2N1');
});
Route::get('/paginaN3', function () {
    return view('paginaN3');
});
Route::get('/paginaN4', function () {
    return view('paginaN4');
});
Route::get('/paginaN5', function () {
    return view('paginaN5');
});
Route::get('/paginaHistoria', function () {
    return view('paginaHistoria');
});
Route::get('/paginaHistoriaEjer', function () {
    return view('paginaHistoriaEjer');
});