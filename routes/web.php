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
    return view('gentelella.layout.main');
});
Route::get('/index',function(){
	return view('gentelella.pages.index');
});
Route::get('/index2',function(){
	return view('gentelella.pages.index2');
});
Route::get('/index3',function(){
	return view('gentelella.pages.index3');
});
Route::get('/contacts',function(){
	return view('gentelella.pages.contacts');
});
Route::get('/calendar',function(){
	return view('gentelella.pages.calendar');
});
Route::get('/e-commerce',function(){
	return view('gentelella.pages.e_commerce');
});
Route::get('/chartjs',function(){
	return view('gentelella.pages.chartjs');
});
Route::get('/chartjs2',function(){
	return view('gentelella.pages.chartjs2');
});
Route::get('/echarts',function(){
	return view('gentelella.pages.echarts');
});
Route::get('/general-elements',function(){
	return view('gentelella.pages.general-elements');
});
Route::get('/form',function(){
	return view('gentelella.pages.form');
});
Route::get('/form-advanced',function(){
	return view('gentelella.pages.form-advanced');
});