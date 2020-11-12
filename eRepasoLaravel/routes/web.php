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

Route::get('/','controlador@login');

Route::post('/validar','controlador@validarlogin');

Route::get('/home','controlador@home');

Route::get('/daVinci','controlador@vinci');

Route::get('/Dali','controlador@dali');

Route::get('/Miguel_Angel','controlador@miguelAngel');

Route::get('/Picasso','controlador@picasso');

Route::get('/Van_Gogh','controlador@vanGogh');
