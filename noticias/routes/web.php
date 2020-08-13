<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;


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

Route::get('/', function ()
{

    $data = DB::select('SELECT * FROM (SELECT * FROM noticia ORDER BY id DESC LIMIT 10) subq ORDER BY id ASC;');

    return View::make('pages.home',
    ['data' => $data]);
});


Route::get('/noticia/{id}', function ($id)
{
    $data = DB::table("noticia")->where("id", $id)->get();

    return View::make('pages.noticia',
    ['info' => $data]);
});

Route::get('/busqueda', 'NoticiasController@processForm')->name('noticias');
