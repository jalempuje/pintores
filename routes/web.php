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

Route::get('/', 'controlador@login');

Route::get('/leo', [
    'uses'=>'controlador@leo',
    'as'=>'Leo']);


Route::get('/eli', [
    'uses'=>'controlador@eli',
    'as'=>'eli']);

Route::get('/fri', [
    'uses'=>'controlador@fri',
    'as'=>'fri']);

Route::get('/pic', [
    'uses'=>'controlador@pic',
    'as'=>'pic']);

Route::get('/van', [
    'uses'=>'controlador@van',
    'as'=>'van']);

Route::post('/valida', 'controlador@validarlogin');
    
