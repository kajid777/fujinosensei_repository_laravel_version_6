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
Route::get('/', 'ChapterController@index');

Route::get('/part/{hoge}', 'ChapterController@show');
//hogeはワイルドカード
Route::get('/problems',function(){
	return App\Models\problem::all();
});
Route::get('/users',function(){
	return App\Models\user::all();
	
});


// Route::get('/part/{content_number}', 'ChapterController@show');